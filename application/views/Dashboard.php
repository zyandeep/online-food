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
  <h2>FoodPark</h2>  
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
        <img src="<?= base_url('assets/img/chicken.jpg') ?>" alt="Los Angeles" style="width:100%; height:300px">
      </div>

      <div class="item">
        <img src="<?= base_url('assets/img/fastfood.jpg') ?>" alt="Chicago" style="width:100%;height:300px">
      </div>
    
      <div class="item">
        <img src="<?= base_url('assets/img/collection.jpg') ?>" alt="New york" style="width:100%;height:300px">
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
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">

					<div class="card-body">
						<h3 class="card-title">Compare</h3>
						<p class="card-text">JavaScript | Python</p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title text-primary">Placement</h3>
						<p class="card-text">Sudo Placement Course</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title">DSA</h3>
						<p class="card-text">DS & Algo Course</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="#" class="card-link">View more</a></h1>

<h1 style="color:green;text-align:center;">
		Non-Vegetarian
	</h1>

	<div class="container">
		<div class="card-group">

			<!--bootstrap card with 3 horizontal images-->
			<div class="row">
				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">

					<div class="card-body">
						<h3 class="card-title">Compare</h3>
						<p class="card-text">JavaScript | Python</p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title text-primary">Placement</h3>
						<p class="card-text">Sudo Placement Course</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title">DSA</h3>
						<p class="card-text">DS & Algo Course</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="#" class="card-link">View more</a></h1>
<h1 style="color:green;text-align:center;">
		Beverages
	</h1>

	<div class="container">
		<div class="card-group">

			<!--bootstrap card with 3 horizontal images-->
			<div class="row">
				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">

					<div class="card-body">
						<h3 class="card-title">Compare</h3>
						<p class="card-text">JavaScript | Python</p>
					</div>
				</div>

				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title text-primary">Placement</h3>
						<p class="card-text">Sudo Placement Course</p>
					</div>
				</div>
				
				<div class="card col-md-4">
					<img class="card-img-top" src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
					
					<div class="card-body">
						<h3 class="card-title">DSA</h3>
						<p class="card-text">DS & Algo Course</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <h1><a href="#" class="card-link">View more</a></h1>

</body>
</html>
