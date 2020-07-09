@extends('layouts.app')

@section('content')
<div class="container">
    <div class="cover">
        <div class="jumbo">
            <h1>Online Soko</h1>
            <p>Premium Non-Essentials</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav class="nav-bar">
                <div>
                    <ul>
                        <li>Lifestyle</li>
                        <li>Home</li>
                        <li>Wearables</li>
                        <i class="fas fa-search"></i>
                        <a href="/home"><i class="fas fa-user-alt"></i></a>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
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
        <h2>{{$item['id']}}</h2>
        <h2>KSH.{{$item['price']}}</h2>
        <a id="left">
            <h2 id="stock">{{$item['quantity']}} in Stock</h2>
            <a href="{{ route('product.addToCart',['id'=>$item['id']]) }}">
                <h2 id="stock-cart">Add to Cart</h2></a>
        </a>
    </div>
</div>
@endforeach
</div>
</div>

@endsection
