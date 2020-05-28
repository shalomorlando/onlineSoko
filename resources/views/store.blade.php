<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            header{
                border-bottom: 1px solid
                rgba(199, 199, 199, 0.25);
                align-items: center;
                display: flex;
                width:90%;
                margin: auto;
                height: 10vh;
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
            .box1{
                background: lightcoral;
            }

            .box2{
                background:lightblue;
            }
            main{
                display:grid;
                height:90vh;
                grid-template-columns: 20% 80%;
            }

        </style>
    </head>
    <body>
            <header class="main">
                <div class="logo">
                    <img src="#" alt="logo">
                    <h4>Online Soko</h4>
                </div>
                <nav class="navigation">
                    <ul class="nav-links">
                        <li> <a class="links" href="#"> HEALTH+ </a></li>
                        <li> <a class="links" href="#"> PROGRAM </a></li>
                        <li> <a class="links" href="#"> COURSES </a></li>
                        <li> <a class="links" href="#"> WORKOUTS </a></li>
                    </ul>
                </nav>                
            </header> 
            <main>
                <div class="box1">
                    <h1>Box 1</h1>
                </div>
                <div class="box2">
                    <h1>Box 2</h1>
                </div>
            </main>           
    </body>
</html>
