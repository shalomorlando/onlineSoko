<!DOCTYPE html>
<html lang="en"> 
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <title>Aren Shoes</title>
    <link rel="stylesheet" href="{{ URL::asset('css/shop.css')}}" /> 
    <link rel="stylesheet" href="bootstrap.min.css" />
    <script src="jquery.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
</head>
<body>
 <div class= "navigation">
    <ul>
          <h4 style= "float:left; color:white;"> Online Soko </h4> 

     </ul>
            <p class = "owner">Aren_Shoeske</p><br>
            <p class = "ownerdetails">
              Aren Shoeske is a Kenyan owned brand that <br>
              specializes in quality designer sneakers at affordable prices.<br>
              
            </p>
              <div class = "img-container">
              <img src = "/img/pant1.jpg" alt = "Shop Owner" style = "width:350px" >
              </div>
          </div>
<br><br><br><br><br><br><br><br><br><br><br>


<br><br>

<div class = "text">
          Aren shoes  sells a variety of items,from hoodies to 
          makeup brushes and ring sets to help you keep 
          up with the fashion trends.
          It is considered one of the best businesses due
          to their consistent product quality.Great selections
          at our online store . Contact us to reserve any item. 
          Our open time is from 10:00 a.m  from Monday to Saturday. 
          
          Deposit is required before delivery which is done freely within the CBD and at a fee depending on where
          you are. Exchanging of items is permitted only when shoes are returned in the same condition.
</div>
  <!-- Page content -->
</div>
</div>
<p class ="products">
  Product By Aren ShoesKE:
  </p>
  <div class = "product">
      @foreach ($products as $item)
      <div class="card">
        <a href = "{{route('shop.show',$item->id)}}"><img src="{{ asset('uploads/pictures/' . $item['image'])}}"></a>
      <p class= "item">{{$item['name']}}</p>
      <p>KSH.{{$item['price']}}</p>
        
  </div>
  @endforeach
</div>


</body>
</html>