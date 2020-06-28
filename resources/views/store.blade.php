<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            main{
                display:grid;
                height:100vh;
                grid-template-columns: 20% 80%;
            }

            .sidebar{
                background: rgb(2,0,36);
                background: linear-gradient(rgba(2,0,36,1) 0%, rgba(80,80,206,1) 35%, rgba(0,212,255,1) 100%); 
                margin-top:0%;
                padding-top:20px;
                left:0;
                height:100%;

            }

            .sidebar .profile_image{
                height:100px;
                width:100px;
                border-radius:100px;
                margin-bottom:20px;
                margin-top:20px;
            }
            .sidebar h4{
                color:white;
                margin-top:0;
                margin-bottom:10px;
            }  

            .sidebar hr{
                width:80%;
                color:#3333B8;
                margin-bottom:20px;
            }
            .sidebar a{
                color:#fff;
                display:block;
                width:100%;
                line-height:60px;
                text-decoration:none;
                padding-left: 15%;
                box-sizing:border-box;
                transition:0.5s;
                transition-property: background;
            }  
            .sidebar a:hover{
                background:#3333B8;
            }  
            .sidebar i {
                padding-right:10px;
            }      

            .box2{
                background:white;
            }

            header{
                border: 1px solid
                rgba(199, 199, 199, 0.25);
                align-items: center;
                display: flex;
                width:98%;
                background-color:rgba(0,0,0,0.03);
                margin: auto;
                padding: auto;
                margin-top:2%;
                height: 10vh;
                border-radius:10px;
                align-items: center;
            }
            .logo, .nav-links{
                display: flex;
            }
            .logo{
                flex: 1;
                align-items: center;
            }
            .logo img{
                width: 10%;
                height: 10%;
                border-radius: 50%;
            }
            .logo h4{
                margin-left: 5px;
                font-weight: 600;
                font-size: 12pt;
                color: black !important;
            }
            .navigation{
                flex: 2;
            }
            .nav-links{
                justify-content: space-around;
                list-style: none;
            }
            .links{
                text-decoration: none;
                text-transform: uppercase;
                font-weight: 600;
                font-size: 12pt;
                color: black !important;
            }

            .box2 .content {   
                width:98%;
                margin:auto;
                margin-top:2%;
                height:100%;
                background-color:rgba(0,0,0,0.03);
                padding:10px;

            }

            .card-img-top {
                width: 100%;
                height: 15vw;
                object-fit: cover;
            }

            .content hr {
                margin-top: 0;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body>            
        <main>
            <!--Side bar-->
            <div class="sidebar">
                <center>
                    <img src="/img/pant1.jpg" alt="" class="profile_image">
                    <h4>Store Name</h4>
                    <h4>Store Bio Description</h4>
                </center>

                <hr>

                <a href="{{ url('/store/storefront') }}" class="active-item">
                    <i class="fas fa-store"></i>
                    <span>STORE FRONT</span>
                </a>

                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span>REPORTS</span>
                </a>

                <a href="{{ url('/store/createproduct') }}">
                    <i class="fas fa-plus-square"></i>
                    <span>ADD ITEM</span>
                </a>

                <a href="{{ url('/') }}">
                    <i class="fas fa-map-marked"></i>
                    <span>MARKET PLACE</span>
                </a>

                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>ACCOUNT-SETTINGS</span>
                </a>


            </div>
            <!--End Side bar-->


            <div class="box2">
                <header class="card">
                    <div class="card-body ">
                        <h4>Online Soko - Store Front @ Store Name</h4>
                    </div>               
                </header>

                <div class="content border card-columns">
                    @foreach($items as $item)
                        <div class="card" style="width: 16rem;">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/pictures/' . $item->image)}}" alt="Card image cap">
                            <hr>
                            <div class="card-body">
                                <p class="card-title text-truncate" style="text-transform: uppercase;">Ksh. {{$item->price}} -  {{$item->name}}</p>
                                <p class="card-text text-truncate">{{$item->description}}</p>
                                <center><a href="/editimage/{{$item->id}}" style="width:90%;" class="btn btn-primary"> Edit Product </a></center><br>
                                <center><a href="/deleteimage/{{$item->id}}" style="width:90%;" class="btn btn-danger" >Delete Product</a></center>
                            </div>
                        </div> 
                    @endforeach          
                </div> 
            </div>
        </main>           
    </body>
</html>