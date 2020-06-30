<!DOCTYPE html>
<head>
<link rel="stylesheet" href="{{ URL::asset('css/product.css')}}" /> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<div class = "navigation">
    <ul>
     <img src = "/shopimages/logo.jpg" alt ="logo"  width= "80px"style= "float:left";>
     <li style="float:right">SHOP</li>
     <li style="float:right">BLOG</li>
    <li style="float:right"> CART</li>
</ul>
</div>

<br><br><br><br><br>
<div class = "column">
<div class="card">
  <img src="/shopimages/Nike_airmax.jpg" alt="Denim Jeans" style="width:300px">
  <h1>Nike Airmax </h1>
  <p class="price">Kshs 4500</p>

  <p><button>Add to Cart</button></p>
</div>
</div>
<h3 style = "text-align:center"> More Items from the Store</h3>
<br><br><br><br>
<div class="column">
            
            <div class="card">
                <img src="/shopimages/background1.jpg" alt="Balenciaga " style="width:200px">
                <p>Balenciaga Arena High <br> Ksh.4500</p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="/shopimages/balenciaga2.jpg" alt="Black Cutlery Set" style="width:200px">
                <p>Black Cutlery Set <br>Ksh. 700</p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="/shopimages/fila.jpg" alt="Fila1" style="width:200px">
                <p>Yellow Fila<br>Ksh. 700</p>
            </div>
        </div>
        
        <div class="column">
            <div class="card">
                <img src="/shopimages/fila2.jpg" alt="ila2" style="width:200px">
                <p>Matte Plate<br> Ksh. 1000</p>
            </div>
        </div>
       
 
        

<script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');
            images.forEach((element) => element.addEventListener('click', thumbnailClick));
            function thumbnailClick(e) {
                currentImage.classList.remove('active');
                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })
                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }
        })();
    </script>
</body>
</hthml>