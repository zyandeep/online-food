<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>

<body>

    <h3 style="text-align: center;">Add Items</h3>

    <?= form_open_multipart(base_url("add_items/add_item")); ?>

    <div class="form-group">
        <label for="name"><span class="text-danger font-weight-bold">*</span> Item Name: </label><br>
        <input type="text" name="name" required placeholder="Enter Item Name" value="" />

    </div>


    <div class="form-group">
        <div>
            <label for="category">Choose a Category:</label>
        </div>

        <select name="category" id="category">
           
           <option value="veg">VEG</option>
           <option value="nonveg">NON-VEG</option>
           <option value="beverage">BEVERAGE</option>



        </select>
    </div>

    <div class="form-group">
        <label for="price"><span class="text-danger font-weight-bold">₹</span> Price: </label><br>
        <input type="text" name="price" required placeholder="Enter price in ₹" value="" />

    </div>


    <div class="form-group">
        <label for="rate"><span class="text-danger font-weight-bold">*</span> Rating: </label><br>
        <input type="text" value="" name="rate" required placeholder="Enter rating between 1 to 5" />

    </div>


    <div class="form-group">
        <label for="description"><span class="text-danger font-weight-bold"></span> Description: </label><br>
        <input type="text" name="description" required placeholder="Describe in short" value="" />

    </div>

    <div class="form-group">
        <label for="image_path"><span class="text-danger font-weight-bold"> Upload an Image: </span></label><br>
        <input type="file" name="userfile" size="1024" id="image_path" />

    </div>


    <button type="submit">Submit</button>

    <a class="btn btn-outline-secondary" href="<?= base_url('admin_dashboard') ?>" role="button">Cancel</a>
    </form>



</body>

</html>