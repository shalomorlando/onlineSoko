<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/product.css')}}" /> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<nav class="nav-bar">
        <div>
            <h1>Online Soko</h1>
        </div>
        <div>
            <i class="fas fa-search"></i>
            <a href="/home"><i class="fas fa-user-alt"></i></a>
            <i class="fas fa-shopping-bag"></i>
        </div>
    </nav>
    <br><br><br><br><br>

    <div class = "product-card">
    @foreach ($product as $item)
        <div class = "product-image">
            <img src = "{{ asset('uploads/pictures/' . $item['image'])}}" style = "width:370px; height:350px" >
        </div>
        <div class = "product_details">
            <br><br><br><br>
            <p id = "title">{{$item['name']}}</p><br>
            <p id = "description">{{$item['description']}}<br> 
        </p><br>
            <p id = "shillings">Ksh{{$item['price']}} </p><br><br>
            
            <h2 id="stock">{{$item['quantity']}} in Stock</h2>
          <a href="{{route('product.addToCart',['id'=>$item['id']])}}">  <h2 id="stock-cart"> Add to Cart</h2></a>
         <a href="{{ url('/shop') }}">  <h2 id="stock-cart"> Go to shop</h2></a>


        </div>
        @endforeach
    </div>
    <br><br><br>
     <h2 style = "text-align:center"> You may also like </h2>
    <div class = "product">
      @foreach ($mightAlsoLike as $element)
      <div class="card">

        <a href = "{{route('shop.show',$item->id)}}"><img src="{{ asset('uploads/pictures/' . $element['image'])}}"></a>
      <p class= "item">{{$element['name']}}</p>
      <p>KSH.{{$element['price']}}</p>
      
      
        
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