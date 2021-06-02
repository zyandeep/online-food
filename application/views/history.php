<!DOCTYPE html>
<html lang="en">
<!?=pre($history)?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order History</title>

    </head>

    <body>

        <div class="container">


            <div class="col-sm-12">
                <div>
                    <h3 style="text-align: center;">Order History</h3>


                    <table id="history" class="table table-striped table-bordered" style="width:100%">

                        <thead>
                            <tr>
                                <th>Bill ID</th>
                                <th>Bill Status</th>
                                <th>Bill Date</th>
                                <th>Total Bill Amount</th>
                                <th>Bill Summary</th>
                                
                            <tr>
                        </thead>

                        <tbody>
                            <?php foreach ($history as $q) : ?>

                                <tr>
                                    <td><?= $q->bill_id ?></td>
                                    <td><?= $q->status ?></td>
                                    <td><?= $q->bill_date ?></td>
                                    <td>₹<?=$q->bill_amount?></td>
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
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
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