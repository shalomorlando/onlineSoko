<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href = "/css/mystore.css" rel ="stylesheet">

</head>
<body>
  <ul>
    <img src = "/img/logo.jpg" style="width:80px";>
    <li style="float:right"><a href="#home">REVIEWS</a></li>  
    <li style="float:right"><a href="#news">ORDERS</a></li>
    <li style="float:right"><a class="active" href="#about">STORE FRONT</a></li>
  </ul>
<div class="column1">
<div class="card">
      <img src= "/img/owner.jpg" alt="Profile Photo" style="width:100%">
      <br><br>
      <h4 class="title">JOHN DOE</h4>
      <h4 class="title">SHOP OWNER</h4>
      <h4 class="title">CLOTHES STORE</h4>
      <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
      </div>
      <p class="title"><button>Contact</button></p>
      <p class="title"><button>Dashboard</button></p>
      <p class="title"><button>Store Front</button></p>
      <p class="title"><button>Reports</button></p>
      <p class="title"><a href="{{ url('/add') }}">Add Item</a></p> 
    </div>

</div>
  <div class="column2">
  <div class="main">


<div id="myBtnContainer">
  <button class="bton active" onclick="filterSelection('all')"> SHOW ALL </button>
  <button class="bton" onclick="filterSelection('tops')"> TOPS </button>
  <button class="bton" onclick="filterSelection('pants')"> PANTS </button>
  <button class="bton" onclick="filterSelection('hoodies')"> HOODIES </button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column tops">
    <div class="content">
      <img src="/img/top4.jpg" alt="Mountains" style="width:90%">
      <h4>Laced Top</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column tops">
    <div class="content">
    <img src="/img/top5.jpg" alt="Lights" style="width:100%">
      <h4>Tailored Top</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column tops">
    <div class="content">
    <img src="/img/top6.jpg" alt="Nature" style="width:100%">
      <h4>Crop Top</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  
  <div class="column pants">
    <div class="content">
      <img src="/img/pant1.jpg" alt="Car" style="width:100%">
      <h4>Cargo pants</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column pants">
    <div class="content">
    <img src="/img/pant5.jpg" alt="Car" style="width:100%">
      <h4>Official pants</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column pants">
    <div class="content">
    <img src="/img/pant3.jfif" alt="Car" style="width:100%">
      <h4>Adidas Pants</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>

  <div class="column hoodies">
    <div class="content">
      <img src="/img/hoodie1.jpg" alt="Car" style="width:100%">
      <h4>Pink Hoodie</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column hoodies">
    <div class="content">
    <img src="/img/hoodie2.jpg" alt="Car" style="width:100%">
      <h4>Layed-Back Hoodie</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
  <div class="column hoodies">
    <div class="content">
    <img src="/img/hoodie3.jpg" alt="Car" style="width:100%">
      <h4>Lazy Hoodie</h4>
      <p class="price">$19.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Edit</button>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
  </div>
  



</body>
</html>
