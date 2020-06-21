<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="column1">
<div class="card">
      <p class="title"><a href="{{ url('/addrecord') }}" style="font-size:15px;">My store</a></p> 
    </div>
    <br><br>
</div>
        <div class="container">

            <div class="jumbotron">
            <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Product name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
             @foreach($items as $item)
               <tr>
                   <th>{{$item->id}}</th>
                   <th>{{$item->name}}</th>
                   <th><img src="{{ asset('uploads/pictures/' . $item->image)}}" width="100px" height="100px" alt="image"></th>
                   <th>{{$item->description}}</th>
                   <th>{{$item->quantity}}</th>
                   <th>{{$item->price}}</th>
                   <th> <a href="/editimage/{{$item->id}}" class="btn btn-success" >EDIT</a></th>
                   <th> <a href="/deleteimage/{{$item->id}}" class="btn btn-danger" >DELETE</a></th>
               </tr>
            
             @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </body>

</html>
