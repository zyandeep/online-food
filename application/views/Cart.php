<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <style>
        #place {
            float: right;
            background-color: wheat;
        }

        #edit {

            background-color: wheat;
        }
    </style>

    <script>
        $(document).ready(function() {

            var orders = [];
            for (let key in localStorage) {
                if (!isNaN(key)) {
                    orders.push(JSON.parse(`${localStorage.getItem(key)}`));
                }
            }

            var totalAmount = orders.reduce(function(total, currentValue, currentIndex, arr) {
                return total + currentValue[4];

            }, 0);;






            $('#example').DataTable({
                data: orders,
                columns: [{
                        title: "Name"
                    },
                    {
                        title: "Description"
                    },
                    {
                        title: "Quantity"
                    },
                    {
                        title: "Price"
                    },
                    {
                        title: "Total"
                    },
                    {
                        title: "Remove"
                    },

                ],
                columnDefs: [
                    // {
                    //     "targets": -1,
                    //     "data": null,
                    //     "defaultContent": ' <button id="Remove">Delete item</button>',

                    // },
                    {
                        "targets": -1,
                        data: null,
                        render: function(data, type, row, meta) {
                            // return type === 'display' ?
                            //     '<progress value="' + data + '" max="9999"></progress>' :
                            //     data;

                            console.log(row);

                            return '<button id="Remove">Delete item</button>';

                            

                            
                        }
                    }
                ]

            });




            // display total amount.
            document.querySelector('#totalAmount').textContent = totalAmount;



            $('#Remove').click(function() {
                for (let key in localStorage) {

                    orders.push(JSON.parse(`${localStorage.removeItem(key)}`));


                }

                location.reload();
            });

        });
    </script>



    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div>
                    <h3>Cart</h3>
                    <table id="example" class="table table-striped table-bordered" style="width:100%"></table>
                </div>
                <div style="padding-top: 10px;">
                    <button id="edit"><a href="<?= base_url('menu/veg') ?>" style="color: black;">Edit Order</a></button>
                    <button id="place">Place Order</button>
                </div>

                <h2 style="text-align: center; color:teal"><b>Total Amount: <span id="totalAmount"></span></b> </h2>
            </div>



        </div>
    </div>

    </body>

</html>