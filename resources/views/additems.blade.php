<!DOCTYPE html>
<html>
<head>
  <?php //include(app_path().'\bar\sidebar.php');?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href = "/css/add_item.css" rel ="stylesheet">

</head>
<body>
<div class="insert">
<h2>ADD ITEMS</h2><br><br>
       <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
       {{csrf_field() }}
       <div class="fields">
<input type="text" name="name" id="name" class="form-control" placeholder="Name"/>
</div>
<div class="fields">
<input type="file" name="image" id="image" class="form-control" placeholder="Image"/>
</div>
<div class="fields">
<input type="text" name="description" id="description" class="form-control" placeholder="Description"/>
</div>
<div class="fields">
<input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity"/>
</div>
<div class="fields">
<input type="number" name="price" id="price" class="form-control" placeholder="Unit Price"/>
</div><br>
       <center><input class="btn btn-primary" type="submit"  name="submit"  value="ADD"/></center><br>
    </form>
</div>
  
</body>
</html>
