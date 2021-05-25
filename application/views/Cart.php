<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<style>
#place{
    position:absolute;
bottom:20rem;
margin-left: 105rem;
background-color: wheat;
}
</style>
	
<script>
	var orders = [];
	for(let key in localStorage) {
        if (!isNaN(key)){
        orders.push(JSON.parse(`${localStorage.getItem(key)}`));
       }
    }

    
    $(document).ready(function() {
        
    $('#example').DataTable( {
        data: orders,
        columns: [
            { title: "Name" },
            { title: "Description" },
            { title: "Quantity" },
            { title: "Price" },
            { title: "Total"},
            { title: "Remove"},

        ],
        columnDefs: [ {
            "targets": -1,
            "data": null,
            "defaultContent":' <button id="Remove">Delete item</button>',

        }
         ]
         
    } );
    
    
    $('#Remove').click(function(){
        for(let key in localStorage) {
            
           orders.push(JSON.parse(`${localStorage.removeItem(key)}`));

          //  const orders = JSON.parse(`${localStorage.getItem(key)}`);
        //   console.log(orders);

        //   const filtered = orders.filter(orders => orders.key !== 1);
        //  localStorage.setItem('key', JSON.stringify(filtered));
           
          
    }
    location.reload();
});

} );
    
</script>



<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
	<h3>Cart</h3>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
    
</div>
<button id="place">Place Order</button>
</body>
</html>