
<!DOCTYPE html>
<html lang="en">
<head>

  <title>FoodPark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Barbeque Corner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= base_url('dashboard') ?>">Home</a></li>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('menu/veg')?>">Vegetarian</a></li>
          <li><a href="<?= base_url('menu/non_veg')?>">Non-Vegetarian</a></li>
          <li><a href="<?= base_url('menu/bevrg')?>">Beverages</a></li>
        
        </ul>
      </li>
      <li><a href="<?= base_url('signup') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?= base_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="<?= base_url('cart') ?>"><span class="glyphicon glyphicon-log-in"></span> Cart</a></li>
    </ul>
  </div>
</nav>
  


</body>
</html>
