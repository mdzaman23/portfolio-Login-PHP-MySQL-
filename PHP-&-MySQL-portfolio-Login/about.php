<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a class="nav-link" href="contact.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacy.php" target="_blank">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_blank">Login</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<div class="jumbotron">
  <h1>Web Developer</h1>
  <p>Hello There, I am Web Developer md zaman. I'm a VUE JS / JS / HTML / CSS / PHP / SEO Professional Digital Marketer, </p>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="img/md-zaman.png"  class="img-fluid aboutimg"  alt="" >

    </div>
    <div class="col-lg-6 col-md-6 col-12">

      <h2 class="display-4"> I am technical.</h2>
      <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci maxime accusantium non impedit, eum provident obcaecati fuga voluptatem! Totam voluptas accusantium voluptates at dolore omnis nihil enim. Velit, doloribus vel.</p>
      <a href="about.php" class="btn btn-success">check more</a>
      </div>
    </div>
  </div>
</section>


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

</body>
</html>