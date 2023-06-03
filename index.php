<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Furniture</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require "navbar.php"; ?> 

  <section class="home" id="home">
  <div class="container-fluid banner d-flex align-items-center text-white">
    <div class="container text-center">
    <h1> Future Furniture</h1>
    <h6>Decor the dreams with wood beauty</h6>
    </div>
  </div>
  </section>

  <section class="klasik" id="klasik">
  <div class="container-fluid foto py-5 text-white">
    <div class="container text-center">
    <h2>Classics</h2>
    <div class="row mt-5">
      <div class="col-4">
        <div class="klasik-kursi"> </div> 
        <h6><a class="no-decoration" href ="klasik-kursi.php">Classical Chair</a></h6>
      </div>
      <div class="col-4">
        <div class="klasik-meja"></div>
        <h6><a class="no-decoration" href ="klasik-meja.php"> Classical Table</a></h6>
      </div>
      <div class="col-4">
        <div class="klasik-lemari"></div>
        <h6><a class="no-decoration" href ="klasik-lemari.php"> Classical Cupboard</a></h6>
      </div>
    </div>
    </div>
  </div>
  </section>

  <section class="minimalis" id="minimalis">
  <div class="container-fluid fotoo py-5 text-white">
    <div class="container text-center">
    <h2>Minimalist</h2>
    <div class="row mt-5">
      <div class="col-4">
        <div class="minimalis-kursi"></div> 
        <h6><a class="no-decoration" href ="minimalis-kursi.php">Minimalist Chair</a></h6>
      
      </div>
      <div class="col-4">
        <div class="minimalis-meja"></div>
        <h6><a class="no-decoration" href ="minimalis-meja.php">Minimalist Table</a></h6>
      </div>
      <div class="col-4">
        <div class="minimalis-lemari"></div>
        <h6><a class="no-decoration" href ="minimalis-lemari.php">Minimalist Cupboard</a></h6>
      </div>
    </div>
    </div>
  </div>
  </section>

  <section class="contactus" id="contactus">
  <div class="container-fluid py-5 text-center">
    <div class="container">
    <div class="warna-text">
    <h5> Contact us </h5> <br>
    <p> WhatsApp  : 081236931772</p>

    <p> Instagram : Furniture.id</p>
    <p> Facebook  : Furniture.id</p>
    </div>  
  </div>
  </div>
  </section>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="fontawesome/js/all.min.js"></script> 
  <script src="js/script.js"></script>
</body>
</html>
