<!DOCTYPE html>
<head>
  <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="css/style.css">
    <title>PHP-&-MySQL-portfolio</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap');
</style>
  

</head>
<body>
<!-- nevbar start-->


<nav class="navbar navbar-expand-lg bg-body-red">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo3.png" alt="" height="30px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacy.php" target="_blank">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/login%20system%20with%20avatar/login.php" target="_blank">Login</a>
        </li>
        
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- nevbar end -->

<!-- cerojol start  -->


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/big-img/big1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/big-img/big2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/big-img/big3.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/big-img/big4.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/big-img/big5.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- cerojol end -->

<!-- about section start -->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="img/md-zaman.png" class="img-fluid aboutimg"  alt="">

    </div>
    <div class="col-lg-6 col-md-6 col-12">

      <h2 class="display-4"> I am technical.</h2>
      <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci maxime accusantium non impedit, eum provident obcaecati fuga voluptatem! Totam voluptas accusantium voluptates at dolore omnis nihil enim. Velit, doloribus vel.</p>
      <a href="about.php" class="btn btn-success">check more</a>
      </div>
    </div>
  </div>
</section>
<!-- about section end -->
<!-- service section start -->


<section>
  <div class="py-5">
    <h2 class="text-center">Our Services.</h2>
  </div>
  <div class="contaner-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/buti.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautifull Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/buti.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautifull Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/buti.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautifull Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>

      
    </div>
  </div>

</section>
<!-- services section end -->

<!-- services section start-->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery.</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/Screen.jpg "class="img-fluid pb-4" alt="">
    </div>

  </div>
</div>

</section>
<!-- services section end -->

<!-- contact section start -->



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Me.</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>username</label>
        <input type="text"name="user" autocomplete="off"class="form-control">
      </div>

     

      <div class="form-group">
        <label>email id</label>
        <input type="text"name="user" autocomplete="off"class="form-control">
      </div>

      <div class="form-group">
        <label>mobail</label>
        <input type="text"name="user" autocomplete="off"class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="from-control" ></textarea>
      </div>
    
  <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  </section>

  <footer class="p-3 bg-dark text-white text-center">@ md zaman by copy right 2023</footer>
<!-- contact section end -->





<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>