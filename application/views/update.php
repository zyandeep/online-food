
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
    <?php echo form_open('update/update_action'); ?>

    <input type="hidden" name="customer_id" value="<?php echo  $this->session->userdata('customer_id'); ?>">
    
    <div>
    <input type="text" id="name" name="name" placeholder="Enter your Name" required >
    <small class="error-text"><?php echo form_error('name'); ?></small>
    </div> 


    <div>
    <input type="email" id="email" name="email" placeholder="Enter your email" required >
    <small class="error-text"><?php echo form_error('email'); ?></small>
    </div>
    
    <div>
    <input type="tel"  name="mobile_no" placeholder="Enter your No."  required>
    <small class="error-text"><?php echo form_error('mobile_no'); ?></small>
    </div>
    <div>
    <input type="text"  name="address" placeholder="Enter your address" required>
    <small class="error-text"><?php echo form_error('address'); ?></small>
    </div>
    <div>
    <input type="password"  name="old_password" placeholder="Enter your old password" required>
    <small class="error-text"><?php echo form_error('password'); ?></small>
    </div>
    <div>
    <input type="password"  name="new_password1" placeholder="Enter your new password" required>
   
    </div>

    <div>
    <input type="password"  name="new_password2" placeholder="Confirm your password" required>
    <small class="error-text"><?php echo form_error('password'); ?></small>
    </div>

    <div><button type="submit">Update</button>
    
    <a href="<?=base_url('profile')?>">Cancel</a>
    </div>
    <?php echo form_close(); ?>
</body>
</html>