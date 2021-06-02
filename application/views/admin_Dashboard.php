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
  width: 100%;
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
  <h2 style="text-align: center;"> List Of Orders</h2>
    <thead>
      <tr>
        <th>Bill ID </th>

        <th>Customer ID </th>
        <th>Status </th>
        <th>Bill Date </th>
        <th>Bill Summary </th>
        <th>Bill Amount </th>
        <th> Action </th>

      </tr>
    </thead>
    </tbody>
  </table>
  </div>

 
 
  </div>
</body>

</html>