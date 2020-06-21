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
<div class="container">
<form action="/updateimage/{{$items->id}}" method="POST" enctype="multipart/form-data">
{{csrf_field() }}
{{method_field('PUT') }}
  <div class="form-group">

  <input type="hidden" name="id" id="id" value="{{$items->id}}">
  <input type="hidden" name="store_id" id="store_id" value="{{$items->store_id}}">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter name" value="{{$items->name}}">
  </div>
  <label>Image</label>
  <div class="input-group">
      <div class="cutom-file">
      <input type="file" class="custom-file-input" name="image" id="image"  placeholder="Enter name" value="{{$items->image}}">
      <label class="custom-file-label">choose file</label>
      </div>
 </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description" id="description"  placeholder="Enter name" value="{{$items->description}}">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" id="price"  placeholder="Enter name" value="{{$items->price}}">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
</form>
</div>
</body>
</html>