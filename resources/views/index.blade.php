<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <title>Online Soko</title>
</head>
<body>
<div class="cover">
    <nav class="nav-bar">
        <div>
            <h1>Online Soko</h1>
        </div>
        <div>
            <ul>
                <li>Lifestyle</li>
                <li>Home</li>
                <li>Wearables</li>
            </ul>
        </div>
        <div>
            <i class="fas fa-search"></i>
            <a href="/home"><i class="fas fa-user-alt"></i></a>
            <i class="fas fa-shopping-bag"></i>
        </div>
    </nav>
    <div class="jumbo">
        <h1>Online Soko</h1>
        <p>Premium Non-Essentials</p>
    </div>
</div>
<ul class="landing-nav">
    <li class="active-item">
        featured
    </li>
    <li>
        history
    </li>
    <li>
            Cart
    </li>
    <li>
        payment
    </li>

    </ul>


    <div class="product-grid">
        @foreach ($products ?? '' as $item)
            <div class="product-item">
                <img src="{{ asset('uploads/pictures/' . $item['image'])}}">
                <p>{{$item['name']}}</p>
                @if (strlen($item['description'])>31)
                    <h3>{{substr($item['description'],0,29)}}...</h3>
                @else
                <h3>{{$item['description']}}</h3>
                @endif
                <h2>KSH.{{$item['price']}}</h2>
                <a id="left">
                    <h2 id="stock">{{$item['quantity']}} in Stock</h2>
                    <a href="{{route('product.addToCart',['id'=>$item['id']])}}">
                    <h2 id="stock-cart">Add to Cart</h2></a>
                </a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
