<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/product.css')}}" /> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <nav class="nav-bar">
            <div>
                <h1>Online Soko</h1>
            </div>
            <div>
                <ul>
                    
                </ul>
            </div>
            <div>
              <a href = "/">  <i class="fas fa-home"></i></a>
             <a href = "#" >  <i class="fas fa-user-alt"></i></a>
              <a href = "#">  <i class="fas fa-shopping-bag"></i></a>
            </div>
        </nav>

    <br><br><br><br><br><br>

    <div class = "shop-name">
        <h2>The Shop Name</h2>
    </div>

    <br><br>

    <div class = "product-card">
        <div class = "product-image">
        <img src = "/shopimages/marble_plate.jpg" style = "width:320px; height:250px" >
        </div>
        <div class = "product_details">
            <br><br>
            <h2><u>Marble Plate Set</u></h2><br>
            <h3>Two marble dinner plates<br> 
            Available in black and white</h3><br>
            <br>
            <h4>$19.99</h4><br><br>
        </div>
    </div>
    <br><br><br>

    <div class = "other-products">
        <h2>You may also like...</h3>
        <br>
        <div class="column-grid">
            @foreach($products as $product)
            
            <div class="other-product-card">
            <a href = ""><img src = "{{ asset('uploads/pictures/' . $product['image'])}}"></a>
            <a href = "#">{{$product['name']}}</a>
            <a href = "#">{{$product['price']}}</a>

            </div>
            @endforeach

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