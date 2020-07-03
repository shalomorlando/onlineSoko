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

        <!--Chart JS CDN-->


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

            .content .row{
                display:flex;
                align-items:center;
                max-height:25%;
                justify-content:space-evenly;
                padding-top:15px;
                padding-right:5%;
                margin-bottom:10px;
            }

            .col-xl-3 .card{
                min-width:22vw;
                max-height: 18vh;
            }

            .content .border-left-primary{
                border-left: .25rem solid #4e73df !important;
            }

            .content .border-left-success{
                border-left: .25rem solid #1cc88a !important;
            }

            .content .border-left-info{
                border-left: .25rem solid #36b9cc !important;
            }

            .content .charts{
                width:100%; 
                height:70%; 
                background-color: #EEEEEE;
                padding: 10px;
            }

            .weekChart{
                height: 100%;
                width: 100%;
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

                <a href="{{ url('/store/createproduct') }}">
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
                        <h4>Online Soko - Store Front @ Store Name</h4>
                    </div>               
                </header>

                <div class="content border container">                  
                    <div class = "row">                  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Totals)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 annualEarnings"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 monthlyEarnings"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Orders (Totals)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 totalOrders"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="charts">
                    
                        <canvas id="weekChart"></canvas>
                    </div>

                </div>

            </div>
        </main> 

        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

        <!--get data for chart-->
        <script>

            drawChart();

            async function drawChart(){
                yValues = await getData();
                var ctx = document.getElementById('weekChart').getContext('2d');
                console.warn(yValues);
                var myChart = new Chart(ctx, {
                     type: 'bar',
                     data: {
                         labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],

                         datasets: [{
                             label: "This Week's Sales Trend ",
                             data : yValues,
                             backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ], 
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                     }                       

            });
        }

            
            async function getData(){
                const result = await $.ajax({
                    url: 'http://127.0.0.1:8000/api/orders',
                    type: 'GET',
                    success: function (data) {                        
                        
                    },
                    error: function(){
                        console.log('error')
                    }
                });

                totalSales = 0;

                for (i = 0; i < result.length; i++){
                    totalSales = totalSales + result[i].total;
                }

                $(".annualEarnings").append("Ksh " + totalSales);
                $(".monthlyEarnings").append("Ksh " + totalSales);
                $(".totalOrders").append(result.length); 
                
                data = await splitArray(result, 7);
                yTotalOrderValues = await sumUpItems(data);
                //console.warn(yTotalOrderValues[0]);
                return yTotalOrderValues;
            }

            async function sumUpItems(arr){
                total = [];
                for (i = 0; i < arr.length; i++){
                    let orderSum = 0;
                    for(j = 0; j < arr[i].length; j++){
                        order = arr[i][j];
                        orderSum += order.total;
                    }

                    total.push(orderSum);
                }
                return total;
            }
                

            async function splitArray(myArray, split_size){

                let arrayLength = myArray.length;
                let tempArray = [];

                for (let index = 0; index < arrayLength; index += split_size){

                    myChunk = myArray.slice(index, index + split_size);
                    tempArray.push(myChunk);
                }

                return tempArray;

            }
        </script>
                  
    </body>
</html>