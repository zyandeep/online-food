<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <style>
		img {
			max-width: 100%;
			max-height: 50%;
			padding-top:10px;
		}
		h1 {
			color: green;
		}

    h1 a{
      margin-left: 30em;
    }
	</style>

</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url('storage/banner/banner_1.png') ?>" alt="1" style="width:100%; height:400px">
      </div>

      <div class="item">
        <img src="<?= base_url('storage/banner/banner_2.png') ?>" alt="2" style="width:100%;height:400px">
      </div>
    
      <div class="item">
        <img src="<?= base_url('storage/banner/banner_4.png') ?>" alt="3" style="width:100%;height:400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- <div class="container">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<!?= base_url('assets/img/collection.jpg') ?>" alt="Card image" style="width:100%">
    <img class="card-img-top" src="<!?= base_url('assets/img/collection.jpg') ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    
  </div>
  
  
</div> -->

<h2 style="color:green;text-align:center;">
		Vegetarian
	</h2>
	<div class="container">
		<div class="card-group">   
           <div class="row">
           	<?php $x = 0;?>
            <?php foreach ($vegs as $veg): if ($x == 4): break ?>
            <?php endif; ?>	
            <?php $path =$veg->image_path.'/'.$veg->name.'.jpg'?>
           	<div class="card col-md-3">
					<img class="card-img-top" src=
                     "<?= base_url($path) ?>" style="width:280px;height:250px">
					<div class="card-body">
						<h3 class="card-title"><?=$veg->name?></h3>
						<p class="card-text">Rs.<?=$veg->price?></p>
					</div>
				</div>
		   <?php $x++;?>
           <?php endforeach; ?>
           </div>
        </div>			
  <div style="text-align: center;">	
  <h3><a href="<?= base_url('menu/veg')?>" class="card-link">View more</a></h3>
  </div>


<h2 style="color:green;text-align:center;">
		Non-Vegetarian
	</h2>
	<div class="container">
		<div class="card-group">
			<div class="row">
           	<?php $x = 0;?>
            <?php foreach ($non_vegs as $non_veg): if ($x == 4): break ?>
            <?php endif; ?>	
            <?php $path =$non_veg->image_path.'/'.$non_veg->name.'.jpg'?>
           	<div class="card col-md-3">
					<img class="card-img-top" src= "<?= base_url($path) ?>" style="width:280px;height:250px">

					<div class="card-body">
						<h3 class="card-title"><?=$non_veg->name?></h3>
						<p class="card-text">Rs.<?=$non_veg->price?></p>
					</div>
				</div>
		   <?php $x++;?>
           <?php endforeach; ?>
           </div>
         </div>  
	<div style="text-align: center;">
    <h3><a href="<?= base_url('menu/non_veg')?>" class="card-link">View more</a></h3>
    </div >
<h2 style="color:green;text-align:center;">
		Beverages
	</h2>

	<div class="container">
		<div class="card-group">
        			<div class="row">
           	<?php $x = 0;?>
            <?php foreach ($brevs as $brev): if ($x == 4): break ?>
            <?php endif; ?>	
            <?php $path =$brev->image_path.'/'.$brev->name.'.jpg'?>
           	<div class="card col-md-3">
					<img class="card-img-top" src="<?= base_url($path) ?>" style="width:280px;height:250px">

					<div class="card-body">
						<h3 class="card-title"><?=$brev->name?></h3>
						<p class="card-text">Rs.<?=$brev->price?></p>
					</div>
				</div>
		   <?php $x++;?>
           <?php endforeach; ?>
           </div>
			
		</div>
	</div>
	<div style="text-align: center;">
    <h3><a href="<?= base_url('menu/bevrg')?>" class="card-link">View more</a></h3>
    </div>
</body>
</html>
