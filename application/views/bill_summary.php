<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p><?= $this->session->flashdata('message'); ?></p>

    <h3 style="text-align: center;">Your Bill</h3>

    <a href="<?= base_url('cart/print_bill') ?>" target="_blank" rel="noopener noreferrer">Print Bill</a>




    <div>

        <?php $orders = $this->session->userdata('orders'); ?>

        <section id="bill">

            <table class="table">
                <caption class="caption-top">Foodpark Bill Receipt</caption>
                <thead>
                    <tr>

                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($this->session->userdata('orders') as $order) : ?>
                        <tr>
                            <td> <?= $order['item_name'] ?></td>
                            <td> <?= $order['item_description'] ?></td>
                            <td> <?= $order['item_quantity'] ?></td>
                            <td> <?= $order['item_price'] ?></td>
                            <td> <?= $order['item_total'] ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>

                    <tr>
                        <td colspan="4">
                            <h3>Total Amount:</h3>
                        </td>
                        <td>

                            <h3>
                                <?= array_reduce($orders, function ($total, $item) {
                                    return $total + $item['item_total'];
                                }, 0) ?>

                            </h3>

                        </td>

                    </tr>

                </tfoot>



            </table>

        </section>





    </div>



    <script>
        $(document).ready(function() {

            //  delete orders from localstorage
            window.localStorage.clear();


        });
    </script>


</body>

</html>