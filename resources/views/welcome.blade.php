<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>

 
  </head>
  <body>
  <div class="menu">
    <nav class="navbar navbar-expand-lg bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Lomba Kucing</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/peserta">Peserta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-dark" href="/lomba">Daftar Lomba</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right ml-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="register">Register</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
</div>
    
    <div class="slider">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/847402/pexels-photo-847402.jpeg?h=350&auto=compress&cs=tinysrgb" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/841286/pexels-photo-841286.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <div class="ucapan">
      <div class="jumbotron text-center">
        <h2 class="display-4">Lomba Kucing 2017</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, libero laudantium. Exercitationem, quasi, incidunt laborum deserunt nisi sed porro cum quam impedit quaerat consequatur, rerum error vitae atque. Veniam, accusamus.</p>
            <a class="btn btn-danger btn-lg" href="#" role="button" title="Daftar Lomba">Daftar Sekarang !</a>
        </p>
      </div>
    </div>
    
    <div class="content">
      <div class="container">
        <div class="row">
          <<div class="daftarlomba">
          <div class="container">
              <div class="alert alert-danger" role="alert">
                  Harap Hati - Hati! Segala bentuk pesan yang mengataskan <b>NAMA KAMI</b>. Sedangkan bukan berasal dari Akun Sosial Media Resmi Kami, silahkan untuk di <b>ABAIKAN</b>.
              </div>
              <div class="row">
              <?php
              $users = DB::table('lombas')->limit(8)->offset(8)->get();
              
              foreach ($users as $user)
              {
              ?>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <div class="card">
                          <img class="card-img-top" src="<?php echo $user->poster; ?>" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $user->name; ?></h5>
                              <p class="card-text"><?php echo $user->deskripsi; ?>.</p>
                              <a href="/lomba/{{$user->id}}" class="btn btn-primary">Lihat Selengkapnya !</a>
                          </div>
                          <div class="card-footer">
                              <p><?php echo "Batas Penutupan : " . $user->tanggal_tutup; ?></p>
                          </div>
                      </div>  
                  </div>
              <?php } ?>
              </div>
          </div>
      </div>
          
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="footer-text text-center bg-primary">
        &copy; wrep | 2017
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>