<?php

// pre($info);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .hide-section {
            display: none;
        }
    </style>
</head>




<body>

    <h2>Update Your Details</h2>

    <form action="" method="post">

        <input type="hidden" name="customer_id" value="<?= $this->session->userdata('customer_id') ?>">

        <p>
            <label for="name">Customer Name</label><br>
            <input type="text" name="name" id="name" value="<?= $info->name ?>" required readonly>
        </p>

        <p>
            <label for="email">Customer Email</label><br>
            <input type="email" name="email" id="email" value="<?= $info->email ?>" required readonly>
        </p>

        <p>
            <label for="mobile_no">Customer Mobile</label><br>
            <input type="tel" name="mobile_no" id="mobile_no" value="<?= $info->mobile_no ?>" required readonly>
        </p>

        <p>
            <label for="address">Customer Address</label><br>
            <input type="text" name="address" id="address" value="<?= $info->address ?>" required readonly>
        </p>

        <div class="hide-section">

            <p>
                <label for="new_pwd">New Password</label><br>
                <input type="password" name="new_pwd" id="new_pwd" required>
            </p>

            <p>
                <label for="conf_pwd">Confirm Password</label><br>
                <input type="password" name="conf_pwd" id="conf_pwd" required>
            </p>

            <button type="submit">Submit</button>

            <button id="cnclBtn" type="button">Cancel</button>


        </div>

        <button id="editBtn">Edit Info</button>

      

    </form>




<script>

$(document).ready(function () {

$('#editBtn').on('click', function (event) {
    
    $('form  *').removeClass('hide-section');
    $('#editBtn').addClass('hide-section');
    $('input').removeAttr('readonly');

});

$('#cnclBtn').on('click', function (event) {
    
    $('form div').addClass('hide-section');
    $('#editBtn').removeClass('hide-section');
    $('input').attr('readonly', true);

});





});


</script>

</body>

</html>