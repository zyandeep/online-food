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
      margin-left: 50px;
      margin-right: 50px;
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
      <table id="history" class="table table-striped table-bordered" style="width:100%">

        <thead>
          <tr>
            <th>Bill ID</th>
            <th>Bill Status (click to edit)</th>
            <th>Bill Date</th>
            <th>Total Bill Amount</th>
            <th>Bill Summary</th>

          <tr>
        </thead>

        <tbody>
          <?php foreach ($history as $q) : ?>

            <tr>
              <td><?= $q->bill_id ?></td>
              <td contenteditable='true'><?= $q->status ?></td>
              <td><?= $q->bill_date ?></td>
              <td>₹<?= $q->bill_amount ?></td>
              <td>
                <template>

                  <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>

                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>




                      <?php foreach ($q->bill_summary as $order) : ?>

                        <!?=pre($order);?>
                          <tr>
                            <td> <?= $order['item_name'] ?></td>
                            <td> <?= $order['item_description'] ?></td>
                            <td> <?= $order['item_quantity'] ?></td>
                            <td> <?= $order['item_price'] ?></td>
                            <td> <?= $order['item_total'] ?></td>


                          </tr>

                        <?php endforeach; ?>
                    </tbody>
                  </table>

                </template>

                <button>View</button>
                <button>Change Status</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>



  </div>
  <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Order Details</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $(document).ready(function() {

                $('button').on('click', function(event) {

                    const template = $(this).prev('template')[0];
                    const node = template.content.cloneNode(true);
                    
                    $('.modal-body').html(node);

                    $("#myModal").modal("show");



                });

            });
        </script>


</body>

</html>