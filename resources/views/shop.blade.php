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
     <img src = "/shopimages/logo.jpg" alt ="logo"  width= "80px"style= "float:left";>
     <a style="padding-right:1em;" ><li style="float:right"><i class="fas fa-search"></i></li></a>
     <a style="padding-right:1em;" ><li style="float:right"><i class="fas fa-user-alt"></i></li></a>
     <a style="padding-right:1em;" ><li style="float:right"> <i class="fas fa-shopping-bag"></i></li></a>
     </ul>
     <div class = "img-container">
      <br><br>
      <img src = "/shopimages/owner.jpg" alt = "Shop Owner" style = "width:195px" >
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>

<div class = "shopdetails">
はマスタードが大好き<br>
</div>
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
<form method="GET" action="{{ url('my-search') }}" class="form">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="search" class="form-control" placeholder="Search" value="{{ old('search') }}">
        </div>
        <div class="col-md-6">
          <button class="btn btn-success">Search</button>
        </div>
      </div>
    </form>
<br><br><br>

  <!-- Page content -->

</div>

</div>
    <div class="column">
            
            <div class="card">
   <img src="/shopimages/acacia_bowls.jpg" alt="Acacia Bowls" style="width:200px">                <p>Acacia Bowls <br>Ksh.700</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/background1.jpg" alt="Balenciaga " style="width:200px">
                <p>Balenciaga Arena High <br> Ksh.4500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/black_cutlery.jpg" alt="Black Cutlery Set" style="width:200px">
                <p>Black Cutlery Set <br>Ksh. 700</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/black_mug.png" alt="Black Mug" style="width:200px">
                <p>Matte Mug <br>Ksh. 700</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/black_plate.jpg" alt="Black Plate" style="width:200px">
                <p>Matte Plate<br> Ksh. 1000</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/coffee_mug.png" alt="Coffee Mug" style="width:200px">
                <p>Coffee Mug <br> Ksh. 1500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/gold_cutlery.jpg" alt="Gold Cutlery" style="width:200px">
                <p>Gold Cutlery Set <br>Ksh.1000</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/marble_plate.jpg" alt="Marble  Plate" style="width:200px">
                <p>Marble Plate <br>Ksh.2000</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/salad_bowls.jpg" alt="Salad Bowls" style="width:200px">
                <p>Salad Bowls <br>Ksh. 3000</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/walnut_bowls.jpg" alt="Walnut Bowls" style="width:200px">
                <p>Walnut Bowls <br>Ksh1700</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/wood_board.jpg" alt="Wood Board" style="width:200px">
                <p>Wood Board <br>Ksh.1300</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/wood_olivebowls.jpg" alt="Olive Bowls" style="width:200px">
                <p>Olive Bowls <br> Ksh. 2500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/balenciaga_chunky.jpg" alt="Balenciaga Chunky" style="width:200px">
                <p>Balenciaga Chunky <br> Ksh. 5500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/chelsea_boots.jpg" alt="Chelsea Boots" style="width:200px">
                <p>Chelsea Boots <br> Ksh. 2500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/Nike_airmax.jpg" alt="Nike Airmax" style="width:200px">
                <p>Nike Airmax <br> Ksh. 4500</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/shopimages/leather_chelsea_boots.jpg" alt="Olive Bowls" style="width:200px">
                <p>Leather Chelsea Boots <br> Ksh. 3500</p>
            </div>
        </div>

      
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>

