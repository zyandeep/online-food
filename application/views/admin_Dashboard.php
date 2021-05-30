<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    img {
      max-width: 100%;
      max-height: 50%;
      padding-top: 10px;
    }

    h1 {
      color: green;
    }

    h1 a {
      margin-left: 30em;
    }

    .checked {
      color: green;
    }

    .row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

    table,
    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .center tr:hover {
      background-color: #ddd;
    }

    .center th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  
  <div class="row">
  
  <div class="column">
  <table class="center">
  <h2 style="text-align: center;"> Customers Data</h2>
    <thead>
      <tr>
        <th>Customer Name </th>

        <th>Customer ID </th>
        <th>Mobile No. </th>
        <th>Email </th>
        <th>Address </th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($info as $infos) : ?>
          <td> <?= $infos->name ?></td>
          <td> <?= $infos->customer_id ?></td>
          <td> <?= $infos->mobile_no ?></td>
          <td> <?= $infos->email ?></td>
          <td> <?= $infos->address ?></td>
      </tr>
    <?php endforeach; ?>



    </tbody>
  </table>
  </div>

 
  <div class="column">
  <table class="center">
  <h2 style="text-align: center;">Items</h2>
    <thead>
      <tr>
        <th>Item Name </th>

        <th>Category </th>
        <th>Price </th>
        <th>Image </th>
        <th>Rating</th>
        <th>Description </th>




      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($item as $items) : ?>
          <td> <?= $items->name ?></td>
          <td> <?= $items->category ?></td>
          <td> ₹<?= $items->price ?></td>
          <td>
          <img src=" <?= base_url($items->image_path.'/'.$items->name.'.jpg')  ?>" alt="" border=3 height=100 width=100></img>
           </td>
          <td> <?= $items->rate ?><span class="fa fa-star checked"></td>
          <td> <?= $items->description?></td>
      </tr>
    <?php endforeach; ?>



    </tbody>
  </table>
  </div>
  </div>
</body>

</html>