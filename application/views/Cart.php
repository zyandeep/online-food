<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

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

        var orders = null;
        var totalAmount = 0;


        function getDataFromStorage() {
            orders = [];

            for (let key in localStorage) {
                if (!isNaN(key)) {
                    orders.push(JSON.parse(`${localStorage.getItem(key)}`));
                }
            }

            totalAmount = orders.reduce(function(total, currentValue, currentIndex, arr) {
                return total + currentValue[4];

            }, 0);;

            return orders;
        }

        function getOrdersInJSON(ordersArr = []) {

            return JSON.stringify(

                ordersArr.map(function(order) {

                    return {
                        item_name: order[0],
                        item_description: order[1],
                        item_quantity: order[2],
                        item_price: order[3],
                        item_total: order[4],

                    }

                })
            );
        }








        getDataFromStorage();
        // display total amount.
        document.querySelector('#totalAmount').textContent = totalAmount;


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

                {
                    "targets": -1,
                    data: null,
                    render: function(data, type, row, meta) {
                        // return type === 'display' ?
                        //     '<progress value="' + data + '" max="9999"></progress>' :
                        //     data;

                        // console.log(row);

                        return `<button class="remove-btn" data-item-id="${row[5]}" >Delete item</button>`;




                    }
                }
            ]

        });



        $('#example tbody').on('click', 'button', function(event) {

            const itemID = $(this).data("item-id");

            $('#alertBtn').data('item-id', itemID);

            $("#alert").modal("show");
        });


        $('#alertBtn').on('click', function(event) {

            window.localStorage.removeItem('' + $(this).data('item-id'));

            // reload data for datatable

            const myTable = $('#example').DataTable();

            myTable.clear().rows.add(getDataFromStorage()).draw();

            // display total amount.
            document.querySelector('#totalAmount').textContent = totalAmount;

        });


        /* Submit order to backend */
        $('form').on('submit', function(event) {

            event.preventDefault();

            if (totalAmount > 0) {
                $('[type="hidden"]').val(getOrdersInJSON(getDataFromStorage()));

                document.querySelector('form').submit();
            }



        });








    });
</script>





<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <div>
                <h3>Cart</h3>
                <table id="example" class="table table-striped table-bordered" style="width:100%"></table>
            </div>

            <div style="padding: 10px 0; margin: 10px 0">
                <button id="edit"><a href="<?= $_SERVER['HTTP_REFERER']; ?>" style="color: black;">Edit Order</a></button>

                <form action="<?= base_url('cart/get_orders') ?>" method="post">

                    <input type="hidden" name="order" value="">

                    <button id="place" type="submit">Place Order</button>
                </form>


            </div>

            <h2 style="text-align: center; color:teal"><b>Total Amount: ₹<span id="totalAmount"></span></b> </h2>
        </div>



    </div>
</div>



<div class="modal fade" id="alert" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="alertBtn" data-dismiss="modal">Yes Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>
</div>





</body>

</html>