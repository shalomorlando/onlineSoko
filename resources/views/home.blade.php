@extends('layouts.app')

@section('content')
<div class="img" style="min-width: 100%; margin-top: -24px">
    <div class="cover">
        <div class="jumbo">
            <h1>Online Soko</h1>
        </div>
    </div>
</div>
<ul class="landing-nav">
    <a href="{{route ('home') }}" style="color: #1b1e21">
        <li class="active-item">
            featured
        </li>
    </a>
    <a href="{{route ('product.shoppingCart') }}"style="color: #1b1e21" >
        <li >
            Cart
        </li>
    </a>
    <a href="#" style="color: #1b1e21" >
        <li>
            payment
        </li>
    </a>
</ul>
@if(Session::has('success'))
<divclass="row">
<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div id="charge-message" class="alert alert-success">
        {{Session::get('success') }}
    </div>
</div>
</div>
@endif
<div class="product-grid container">
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
@endforeach
</div>


@endsection
