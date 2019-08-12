
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleweb.css')}}">
    <link rel="stylesheet" href="{{asset('css/progres.css')}}">

    <title>Portofolio</title>
  </head>
  <body>
    
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">My Portofolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
      <a class="nav-link" href="{{ url('home')}}">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('profile')}}">Profile</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{ url('portofolio')}}">Portfolio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('galery')}}">Gallery</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('artikel')}}">Artikel</a>
          </li>
      
    </ul>
  </div>
</nav>
  
<!--Tutup NavBar -->

  <!-- Jumbotron -->

<div class="jumbotron jumbotron-fluid text-center" style="background-image: url(img/background3.jpg); background-size: 100%">
 
    <h1 class="display-4 mb-5 ">Siapa saya?</h1>
    <img src="{{asset('img/myAvatar.png')}}" class="mb-3 rounded-circle" style="width: 15%">
    <h4 class= "mb-3">"Well Hello People"</h4>
    <p class="lead mb-3 " >Perkenalkan Nama Saya adalah Diantama Maulana saya bersekolah di SMK Taruna Bhakti di Depok.</p>
    
    <button type="button" class="btn btn-primary">Read More..</button>

  </div>
</div>

<!-- Tutup Jumbotron -->


<!-- content -->
<div class="container text-center">
  <h1 id="about" class="display-4 mb-4">About Me</h1>
  <hr class="my-3">
  <p>Saya Diantama Maulana Shidiq, Saya Tinggal di Depok, Saya lahir Pada Tanggal 26 Juni 2002 di sebuah rumah sakit daerah Jakarta Saya berseolah di SMK Taruna Bhakti, Jurusan saya adalah Rekayasa Perangkat Lunak, Saya masih Kelas 11 SMK, Saya mulai belajar tentang dasar-dasar layout web pada kelas 10, saya memulai belajar dari dasar yaitu HTML, selain web saya juga belajar tentang pembuatan aplikasi Android dan saya juga pernah mengikuti kelas Android dari dicoding</p>
</div>
<!-- tutup content -->


<!-- content 2 -->

<!-- content 2 -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <p id="jurusan" class="display-4 mt-5" >Jurusan </p>
      <p><b>Rekayasa Perangkat Lunak atau sering disebut Software Engineering</b> adalah suatu bidang yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, 
      manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas</p>
    </div>
    <div class="col-md-3" >
      <img src="img/rpl.png" alt="" class="mt-5" width="70%">
    </div>
  </div>
</div>
<hr>
<div class="container">
  <h1 class="text-center mb-3">Keahlian</h1>
    <div class="row">
        <div class="col-md-3 col-sm-6">
          <h3 class="text-center">Html</h3>
            <div class="progress blue"> 
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">
                  85%
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3 class="text-center">JS</h3>
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">
                  74%
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3 class="text-center">CSS</h3>
            <div class="progress blue"> 
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">
                  81%
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3 class="text-center">PHP</h3>
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">
                  72%
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<!-- tutup content 2 -->
 {{-- Pendidikan --}}
 <div class="container">
   <h1 class="row text-center justify-content-center display-4">Pendidikan</h1>
   <br>
   <div class="row text-center justify-content-center">
     <div class="col-md-3 text-secondary">
     <img src="{{asset ('img/SekolahDasar.png')}}" width="80%">
     <h1 class="mb-3 mt-3">SDN Tugu 4 Depok</h1>
     </div>
     <div class="col-md-3 text-secondary">
        <img src="{{asset ('img/20229086.141202093349.png')}}" width="60%">
        <h1 class="mb-3 mt-3">SMPN 8 Depok</h1>
        </div>
        <div class="col-md-3 text-secondary">
            <img src="{{asset ('img/logosmk.png')}}" width="60%">
            <h1 class="mb-3 mt-3">SMK Taruna Bhakti</h1>
            </div>
   </div>
 </div>

{{-- Tutup Pendidikan --}}
<!-- footer -->

<footer class="card-footer bg-light text-dark text-center">
  CopyRight @2018
</footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>