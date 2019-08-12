<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">My Portofolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('home')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('profile')}}">Profile</a>
                </li>
                <li class="nav-item ">
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

    {{-- Content --}}
    <section class="domain-search-section sc-about-page" style="background-color :aqua">
        <div class="container text-center">
            <h2 style="color :white;">My Profile</h2>
            <img src="img/884.jpg" style="width: 30%; margin-top: 20px" class="img-fluid rounded b-shadow-a">
            <p style="margin-top: 20px; color:black">Pekernalkan nama saya Diantama maulana S. Saya lahir di Rumah
                sakit Fatmawati, saya kecil bertinggal di kota Cikampek, ketika saya masuk sekolah dasar saya pindah di
                Depok Saya bersekolah di SDN Tugu 4 dan ketika saya lulus saya pun bersekolah di SMPN 8 Depok ketika
                saya kelas 9 saya bingung untuk melanjutkan sekolah dimana dan saya dapat rekomendasi dari teman saya
                ada sekolah bagus di daerah Depok bernama SMK Taruna Bhakti dan sayapun bersekolah disini</p>
        </div>
    </section>
    {{-- Tutup Content --}}

    {{-- Biodata --}}
    <section class="milestones-section set-bg" style="background-color:aqua; margin-top:-20px;">
        <div class="container" style="color:black">
            <table style="margin-top:10px">
                <tr>
                    <td>Nama panggilan</td>
                    <td>:</td>
                    <td>Tama / Diantama</td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td>:</td>
                    <td>Menonton Film, Bermain Game</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>diantamamaulana@gmail.com</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>SMK Taruna Bhakti</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>Rekayasa Perangkat lunak</td>
                </tr>
            </table>
        </div>

    </section>

    {{-- Tutup Biodata --}}

</body>

</html>
