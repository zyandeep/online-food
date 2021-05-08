<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>

<link  rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/login.css') ?>">

</head>


<body>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
            <?php echo form_open('login/index', array('id' => 'loginForm'))  ?>
                <!-- <form onsubmit="event.preventDefault()" class="box"> -->
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your Email and Password!</p> <input type="text" name="email" placeholder="Email"> <input type="password" name="password" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a> 

                    <input type="submit" name="submit" value="Login"/>
                    <?php echo form_close(); ?>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>

</body>
</html>