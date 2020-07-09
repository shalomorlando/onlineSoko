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
    <title>Online Soko</title>
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
          <h4 style= "float:left" ;> Online Soko </h4> 
          <a style="padding-right:1em;" ><li style="float:right"><i class="fas fa-search"></i></li></a>
          <a style="padding-right:1em;" ><li style="float:right"><i class="fas fa-user-alt"></i></li></a>
          <a style="padding-right:1em;" ><li style="float:right"> <i class="fas fa-shopping-bag"></i></li></a>
     </ul>
            <p class = "owner"> Shop Name: </p><br>
            <p class = "ownerdetails">
              Fenty Robyn is an international renowed product <br>
              designer.His work is positioned midway between industry <br>
              and handicraft, mass production and one of a kind.
            </p>
              <div class = "img-container">
              <img src = "/shopimages/owner.jpg" alt = "Shop Owner" style = "width:350px" >
              </div>
          </div>
<br><br><br><br><br><br><br><br><br><br><br>


<br><br>

<div class = "text">
          Our shop sells a variety of items,from kitchenware to 
          home decor and a couple of clothes to help you keep 
          up with the fashion trends.
          It is considered one of the best businesses due
          to their consistent product demand.Great selections
          at our online store . The cold season is here as you 
          interact with your friends and family, remember 
          to dress warmer.
          You can do that by purchasing quality items at our shop.
          We also do door step deliveries and work places,all to your preference.
</div>

<br><br>

<br><br><br>

  <!-- Page content -->
</div>
</div>
<p class ="products">
  Product By Shopname :
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