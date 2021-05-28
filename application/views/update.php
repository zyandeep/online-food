
<!DOCTYPE html>
<html lang="en">

<head>

  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h3>Update detail</h3>
    <?php echo $this->session->flashdata('msg'); ?>
    <?php echo form_open(); ?>

    <input type="text" id="customer_id" name="customer_id" value="<?php echo  $this->session->userdata('customer_id'); ?>">
    
    <div>
    <input type="text" id="name" name="name" placeholder="name" value="<?php echo  $this->session->userdata('name'); ?>">
    <small class="error-text"><?php echo form_error('name'); ?></small>
    </div> 
    <div>
    <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo  $this->session->userdata('email'); ?>">
    <small class="error-text"><?php echo form_error('email'); ?></small>
    </div>
    <div><?php echo form_submit('submit', 'Submit'); ?></div>
    <?php echo form_close(); ?>
</body>
</html>