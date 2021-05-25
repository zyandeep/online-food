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

    $(document).ready(function () {
      
      $('form').on('submit', function (event) {
        event.preventDefault();


        var loggedIn = Boolean('<?php echo $this->session->has_userdata('authenticated'); ?>');

        if (!loggedIn) {

          $("#myModal").modal("show");
          return;
        }
        else{
          $("#alert").modal("show");
         







        const quantity = $(this).find('[name="quantity"]').first().val();
        const item_id = $(this).find('[name="item_id"]').first().val();
        const item_name = $(this).find('[name="item_name"]').first().val();
        const item_price = $(this).find('[name="item_price"]').first().val();
        const item_desc = $(this).find('[name="item_desc"]').first().val();

        const order = [];
        //order.push(item_id);
        order.push(item_name);
        order.push(item_desc);
        order.push(quantity);
        order.push(item_price);
        order.push(item_price * quantity);
        order.push(item_id);
        // Store
        localStorage.setItem(item_id, JSON.stringify(order));

        console.log(order);
        }

      });

    });

    


    function add_to_cart(item_id, item_name, item_desc, item_price, ) {
      // var quantity = document.getElementById("quantity").value;

      






      if (typeof(Storage) !== "undefined") {
        //form array
        var order = [];
        //order.push(item_id);
        order.push(item_name);
        order.push(item_desc);
        order.push(quantity);
        order.push(item_price);
        order.push(item_price * quantity);


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
                <?= $item->description ?>&nbsp;&nbsp;&nbsp;
                ₹<?= $item->price  ?>&nbsp;&nbsp;&nbsp;
                <span class="fa fa-star checked"></span><?=$item->rate?>/5</p>
              </div>

              <form>

                <div class="action-panel">
                  <label for="quantity">Quantity:</label>
                  <input type="number" name="quantity" min="1" max="10" required>

                  <input type="hidden" name="item_id" value="<?= $item->item_id  ?>">
                  <input type="hidden" name="item_name" value="<?= $item->name  ?>">
                  <input type="hidden" name="item_price" value="<?= $item->price  ?>">
                  <input type="hidden" name="item_desc" value="<?= $item->description  ?>">

                  <button type="submit"  class="btn btn-outline-light btn-sm">Add To Cart</button>

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
  <div class="modal fade" id="alert" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alert</h4>
        </div>
        <div class="modal-body">
          <p>Item Added to Cart</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


</body>

</html>