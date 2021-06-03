
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Barbeque Corner</title>
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
      <li class="active"><a href="<?= base_url('admin_dashboard') ?>">Home</a></li>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Add <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="<?= base_url('add_Items')?>">Items</a></li>
        
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> View <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('admin_Customers')?>">Customers</a></li>
          <li><a href="<?= base_url('admin_Items')?>">Items</a></li>
        
        </ul>
      </li>
      <?php 
//here we check if session `username` is exist. so it means that the current user is logged in correctly
if($this->session->userdata('authenticated')) : ?>
<li><a href="<?= base_url('admin_dashboard') ?>"><span class="glyphicon glyphicon-user"></span>Hello <?=$this->session->userdata('user_name');?></a></li>
     <li><a href="<?= base_url('admin_login/logout') ?>"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      <?php else : ?>
      <li><a href="<?= base_url('admin_login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php endif;?>
    </ul>
  </div>
</nav>
</body>
</html>
