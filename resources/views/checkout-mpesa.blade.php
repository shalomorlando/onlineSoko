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
    <p style="display:none;" id="price">{{$total}}</p>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row container">
                <div class="col-xs-12 container">
                    <div class="form-group container">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control container" required value="{{ Auth::user()->name }}">
                    </div>
                </div>
                <div class="col-xs-12 container">
                    <div class="form-group container ">
                        <label for="card-number">Phone number</label>
                        <input type="text" id="phone-number" class="form-control container" required>
                        
                    </div>
                </div>

                    </div>
            </div>
              
            </div>
            </div>
            {{ csrf_field() }}
            <div class = "row container mb-4">
                <a class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
                    <a href="#" id="buy" type="button" class="btn btn-success mr-2">Buy Now</a>
                </div>
        </form>

    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="{{URL::to('/js/mpesa.js') }}">
</script>
@endsection
