
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Soko</title>
    
    <link rel="stylesheet" href="{{ URL::asset('css/newsletter.css')}}" />   
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
        
<div class=pg>
<div class=newsletter>
    <h1>Sign up for our newsletter</h1>
  <div class=words>
  <ul>
  <li>Stay up to date on new products</li>
  <li>We only send emails once a month</li>
  <li>We keep your information safe</li>
  </ul>
</div>
  <div class=newsletterbottom>
  <form action="submit" method="POST">
      @csrf
    <div class=email>
        <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
            <br>
            <br>
            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"><b>
                                        {{ __('SIGN UP') }}
                                    </b></button>
                                </div>
            </div>
    

     </div>  
   </form>
  </div>
</div>



    
</body>
</html>