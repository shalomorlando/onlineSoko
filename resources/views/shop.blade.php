<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <title>Online Soko</title>
    <link rel="stylesheet" href="{{ URL::asset('css/shop.css')}}" /> 
   
    
</head>
<body>
  <div class = "wrapper">
    <div class = "box header">
      <nav class="nav-bar">
            <div>
                <h1>Online Soko</h1>
            </div>
            <div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div>
                <a href = "/" ><i class="fas fa-home"></i></a>
               <a href = "#" ><i class="fas fa-user-alt"></i></a>
               <a href = "#" ><i class="fas fa-shopping-bag"></i></a>
            </div>
        </nav>
<br><br><br><br>
      <div class = "shopdetails">
        <h3>Shop Name  </h3>
        <p> The shop does this and that and this and that <br>
        The shop also does this and that and this and that <br>
        and this and that and this.<p>
          <br><br>
        <img src = "/shopimages/owner.jpg" alt = "Shop Owner" style = "width:195px" ><br>
        <p> The shop does this and that and this and that <br>
        The shop also does this and that and this and that <br>
        and this and that and this.
        The shop does this and that and this and that <br>
        The shop also does this and that and this and that <br>
        and this and that and this.<p>
      </div>
      
      
        
</div>
<div class = "box sidebar">

</div>
<div class = " box content">
  <div class = "products text-center">
    @foreach ($products as $product)
      <div class = "product">
        <a href = ""><img src = "{{ asset('uploads/pictures/' . $product['image'])}}"></a>
        <a href = "#"><div class = "product-name">{{$product['name']}}</div></a>
        <div class = "product-price">{{$product['price']}}
    </div>
    @endforeach
    <div>

</div>
<div class = "box footer">

</div>
</div>
 
 </body>
</html>

