<!DOCTYPE html>
<html lang="en">
<head>


  <title><?=$title?></title>
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
  height: 15rem; /*replace this it in width: 100%*/
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

</head>
<body>

<h2 style="text-align: center;"><?=$title?></h2>
<?php foreach ($items as $item): ?>

<?php $path =$item->image_path.'/'.$item->name.'.jpg'?>


<div class="card-container">
  <div class="float-layout">
    <div class="card-image">
      <img src="<?= base_url($path) ?>"  style="width:200px;height:150px">
      <div class="card">
        <div class="card-title"><?=$item->name?></div>
        <div class="card-desc">
        <?=$item->description?>
        </div>
        <div class="action-panel">
        <button type="button" data-item="<?= $item->item_id  ?>" class="btn btn-outline-light btn-sm">Add To Cart</button>
        

        </div>
      </div>
     
    </div>   
  </div>
</div>
<?php endforeach; ?>

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

$(document).ready(function () {
  
  $("[data-item]").on("click", function(){
  
    var loggedIn = Boolean('<?php  echo $this->session->has_userdata('authenticated'); ?>' );   
   
    if (! loggedIn) {
      
      $("#myModal").modal("show");

    }




  });



});

</script>





</body>
</html>