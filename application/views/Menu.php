<!DOCTYPE html>
<html lang="en">

<head>


  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .float-layout {
      padding: 5px 5px;
      float: left;
      width: 100%;
      height: auto;
      box-sizing: border-box;
      margin: 0;
    }

    .card-container {
      overflow: hidden;
    }

    .card {
      background-color: dodgerblue;
      color: black;
      height: 15rem;
      /*replace this it in width: 100%*/
      width: 50%;
      float: right;
    }

    .card-title {
      font-size: 30px;
      text-align: center;
      font-weight: bold;
      padding-top: 20px;
    }

    .card-desc {
      padding: 10px;
      text-align: left;
      font-size: 18px;
    }

    /*add this it*/
    .card-image {
      display: flex;
      margin-left: 20rem;
    }

    /*-------------*/

    div.card-image img {
      width: 50%;
      height: auto;
    }

    /* Phone Devices Query */
    @media only screen and (max-width: 37.5em) {
      div.card-image img {
        width: 100%;
        height: auto;
      }

      /*add this it*/
      .card-image {
        flex-direction: column;
      }

      /*----------------------*/

      .card {
        width: 100%;
        margin-top: -4px;
      }


    }

    div.action-panel {
      padding-right: 0.5rem;
      text-align: right;
    }
  </style>

  <script>
  	function add_to_session(item_id,item_name,item_desc,item_price){
        var quantity=document.getElementById("quantity").value; 
        if (typeof(Storage) !== "undefined") {
        //form array
        var order = []; 	
        //order.push(item_id);
        order.push(item_name);
        order.push(item_desc);
        order.push(quantity);
        order.push(item_price);
        
        // Store
        localStorage.setItem(item_id, JSON.stringify(order));
  	    }
  	}
   
  </script>



</head>

<body>
  <form method='post' action='<?= base_url(); ?>'>
  <h2 style="text-align: center;"><?= $title ?></h2>
  <?php foreach ($items as $item) : ?>

    <?php $path = $item->image_path . '/' . $item->name . '.jpg' ?>


    <div class="card-container">
      <div class="float-layout">
        <div class="card-image">
          <img src="<?= base_url($path) ?>" style="width:200px;height:150px">
          <div class="card">
            <div class="card-title"><?= $item->name ?></div>
            <div class="card-desc">
              <?= $item->description ?>
            </div>
            <form action="#">
               
                <div class="action-panel">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10">
              <button type="button" data-item="<?= $item->item_id  ?>" data-name="<?= $item->name  ?>" class="btn btn-outline-light btn-sm" 
                onclick="add_to_session(<?= $item->item_id ?>,'<?php echo $item->name ?>','<?php echo $item->description ?>','<?php echo $item->price ?>')">Add To Cart</button>
              
                

            </div>
              </form>
           
          </div>

        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </form>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alert</h4>
        </div>
        <div class="modal-body">
          <p>Please Log In First</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


  <script>
    $(document).ready(function() {

      $("[data-item]").on("click", function() {

        var loggedIn = Boolean('<?php echo $this->session->has_userdata('authenticated'); ?>');

        if (!loggedIn) {

          $("#myModal").modal("show");

        }




      });



    });
  </script>





</body>

</html>