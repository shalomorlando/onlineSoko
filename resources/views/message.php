<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("button").click(function(){
        $.get('http://127.0.0.1:8000/api/orders', function(result, status){
            var orders = result;
            //console.log(orders);
            var collection = [];
            var days = {
                "Mon" : 2500,
                "tue" : 3000,
            }
            total = 0;
            for (i = 0; i<orders.length; i++){
                collection = collection + "<p>" + orders[i].total + "</p>";
                total = total + orders[i].total;
            }
            $("p").append(order.length);
            $("#second").append(collection);
            
        })
    });
});

</script>

</head>
<body>
    <h1>Profile List</h1>
    <button>Fetch Ajax data</button>
    <p></p>
    <div id="second"></div>

</body>
</html>