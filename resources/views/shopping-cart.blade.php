@extends('layouts.app')
@section('content')

<div class="img" style="min-width: 100%; margin-top: -24px">
    <div class="cover" >
        <div class="jumbo">
            <h1>Online Soko</h1>
        </div>
    </div>
    <ul class="landing-nav">
        <a href="{{route ('home') }}" style="color: #1b1e21">
        <li >
            featured
        </li>
        </a>
        <a href="#" style="color: #1b1e21">
            <li>
                history
            </li>
        </a>
        <a href="#"style="color: #1b1e21" >
            <li class="active-item">
                Cart
            </li>
        </a>
        <a href="#" style="color: #1b1e21" >
            <li>
                payment
            </li>
        </a>
    </ul>

</div>
@if(Session::has('cart'))
<div class="container">
<div class = "row container" style="border-color: red">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
        <ul class="list-group">
            @foreach($products as $product)
                <li class ="list-group-item" style="display: flex; justify-content: space-around">
                    <span class="badge" style="size:5px">{{ $product['qty'] }}</span>
                    <strong>{{ $product['item']['name'] }}</strong>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-xs dropdown-toogle " data-toggle="dropdown">
                            Action <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Reduce by 1</a></li>
                            <li><a href="#">Reduce All</a></li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
    </br>
<div class = "row container">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
        <strong>Total: {{$totalPrice}} </strong>
    </div>
</div>
<hr>
<div class = "row container">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
        <button type="button" class="btn btn-success">Checkout</button>
    </div>
</div>
    @else
<div class = " container">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
        <h2>No Items in Cart</h2>
    </div>
</div>
    @endif
</div>
@endsection
