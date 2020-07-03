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
                margin-bottom:10px;
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

            .box2 .content {   
                width:98%;
                margin:auto;
                margin-top:2%;
                height:100%;
                background-color:rgba(0,0,0,0.03);
                padding:10px;
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

                <a href="{{ url('/store/reports') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>REPORTS</span>
                </a>

                <a href="{{ url('/addrecord') }}">
                    <i class="fas fa-plus-square"></i>
                    <span>ADD ITEM</span>
                </a>


                <a href="{{ url('/') }}">
                    <i class="fas fa-map-marked"></i>
                    <span>MARKET PLACE</span>
                </a>


            </div>
            <!--End Side bar-->


            <div class="box2">
                <header class="card">
                    <div class="card-body ">
                        <h4>Online Soko - Add Items @ Store Name</h4>
                    </div>               
                </header>

                <form action="/store/storefront" method="POST" enctype="multipart/form-data" class="content border">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input name = "productName" type="text" class="form-control" id="productName" placeholder="Enter the product name">
                    </div>

                    <div class="form-group">
                        <label for="productDescription">Product Description</label>
                        <input name = "productDescription" type="text" class="form-control" id="productDescription" placeholder="Enter the product description">
                    </div>

                    <div class="form-group">
                        <label for="productQuantity">Product Quantity</label>
                        <input name = "productQuantity" type="number" class="form-control" id="productQuantity" placeholder="Enter the product quantity">
                    </div>

                    <div class="form-group">
                        <label for="productPrice">Product Price</label>
                        <input name = "productPrice" type="number" class="form-control" id="productPrice" placeholder="Enter the product price">
                    </div>

                    <div class="form-group">
                        <label for="productImage">Upload Product Image</label>
                        <input name = "productImage" type="file" class="form-control-file" id="productImage">
                    </div>

                    <button class="btn btn-primary" type="submit">Add Product</button>
                </div> 
                
            </form>

        </main>           
    </body>
</html>