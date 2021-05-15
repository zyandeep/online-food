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

<h1 style="color:green;text-align:center;">
		Vegetarian
	</h1>

	<div class="container">
		<div class="card-group">

			<!--bootstrap card with 3 horizontal images-->
			<div class="row">
				<div class="card col-md-4">
					<img class="card-img-top" src=
"<?= base_url('assets/img/food/photo-1514537099923-4c0fc7c73161.jpg') ?>" style="width:300px;height:300px">

					<div class="card-body">
						<h3 class="card-title">Salad</h3>
						<p class="card-text">Healthy Brocoli Salad</p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src=
"<?= base_url('assets/img/food/photo-1540189549336-e6e99c3679fe.jpg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Juice and Exotic Salad</h3>
						<p class="card-text">A great combination of orange juice and salad</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src=
"<?= base_url('assets/img/food/wp4987405.jpg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Paneer</h3>
						<p class="card-text">Shahi Paneer, the Royal food</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="<?= base_url('menu')?>" class="card-link">View more</a></h1>

<h1 style="color:green;text-align:center;">
		Non-Vegetarian
	</h1>

	<div class="container">
		<div class="card-group">

			<!--bootstrap card with 3 horizontal images-->
			<div class="row">
				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/pexels-photo-5835353.jpeg') ?>" style="width:300px;height:300px">

					<div class="card-body">
						<h3 class="card-title">Chicken Thali</h3>
						<p class="card-text">Simple Indian Chicken with arromatic Basmati Rice </p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/photo-1482049016688-2d3e1b311543.jpg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Egg Boil and Toast</h3>
						<p class="card-text">Boiled egg with toast in english style for breakfast</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/pexels-photo-1624487.jpeg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Biriyani</h3>
						<p class="card-text">Do we need to describe Biriyani?</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="<?= base_url('menu')?>" class="card-link">View more</a></h1>
<h1 style="color:green;text-align:center;">
		Beverages
	</h1>

	<div class="container">
		<div class="card-group">

			<!--bootstrap card with 3 horizontal images-->
			<div class="row">
				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/photo-1616606473122-c3301f07bfb1.jpg') ?>" style="width:300px;height:300px">

					<div class="card-body">
						<h3 class="card-title">Pineapple Juice</h3>
						<p class="card-text">Pineapple juice with Soda</p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/photo-1565958011703-44f9829ba187.jpg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Pastry</h3>
						<p class="card-text">Delicious Cheese Strawberry Pastry</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src="<?= base_url('assets/img/food/photo-1617524455443-e2c807d80d29.jpg') ?>" style="width:300px;height:300px">
					
					<div class="card-body">
						<h3 class="card-title">Lemonade</h3>
						<p class="card-text">La La Lemony Lemon juice</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="<?= base_url('menu')?>" class="card-link">View more</a></h1>

</body>
</html>
