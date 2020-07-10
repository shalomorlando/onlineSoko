@extends('layouts.app')
@section('content')

<div class="img" style="min-width: 100%; margin-top: -24px" xmlns:https="http://www.w3.org/1999/xhtml">
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
        <a href="{{route ('product.shoppingCart') }}" style="color: #1b1e21" >
            <li >
                Cart
            </li>
        </a>
        <a href="#" style="color: #1b1e21" >
            <li class="active-item">
                payment
            </li>
        </a>
    </ul>
</div>


<div class="row container" style="margin:auto;">
    <div class="col-sm-6 col-md-offset-4 col-sm-offset-3 container" >
        <h1>Checkout</h1>
        <h4>Your Total Is: Ksh  {{ $total }}</h4>
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ?
        'hidden' : '' }}">
            {{Session::get('error')}}
        </div>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row container">
                <div class="col-xs-12 container">
                    <div class="form-group container">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control container" required value="{{ Auth::user()->name }}">
                    </div>
                </div>


                    <div class="col-xs-12 container">
                        <div class="form-group container">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control container" required>
                        </div>
                    </div>
                <hr>

                <div class="col-xs-12 container">
                    <div class="form-group container">
                        <label for="card-group">Card Holder Name</label>
                        <input type="text" id="card-name" class="form-control container" required>
                    </div>
                </div>
                <div class="col-xs-12 container">
                    <div class="form-group container ">
                        <label for="card-number">Credit Card Number</label>
                        <input type="text" id="card-number" class="form-control container" required>
                    </div>
                </div>
                <div class="col-xs-12 container">
                    <div class="row ">
                        <div class="col-xs--6 container">
                    <div class="form-group container">
                        <label for="card-expiry-month">Expiration Month</label>
                        <input type="text" id="card-expiry-month"
                               class="form-control container" required>
                    </div>
                </div>
                        <div class="col-xs--6 container">
                            <div class="form-group container">
                                <label for="card-expiry-month">Expiration Year</label>
                                <input type="text" id="card-expiry-year"
                                       class="form-control container" required>
                            </div>
                        </div>

                    </div>
            </div>
                <div class="col-xs--6 container">
                    <div class="form-group container">
                <label for="card-cvc">VC</label>
                <input type="text" id="card-cvc"
                       class="form-control container" required>
            </div>
                </div>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success container">Buy now</button>
        </form>

    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript " src="https://js.stripe.com/v2/">
</script>
<script type="text/javascript " src="{{URL::to('public/js/checkout.js') }}">
</script>
@endsection
