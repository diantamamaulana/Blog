<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Artikel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}">


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Large</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-3">
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('portofolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('artikel')}}">Artikel</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!--Tutup NavBar -->
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Artikel
                    </h3>

                    <div class="blog-post">
                        <img src="{{ url('foto/'.$artikel->foto) }}" alt="" style="width: 10;">
                        <h3 class="blog-post-title">{{$artikel->judul}}</h3>
                        <p class="blog-post-meta">{{$artikel->created_at}}<a href="#">{{$artikel->pembuat}}</a></p>

                        <p>{{$artikel->deskripsi}}</p>

                    </div><!-- /.blog-post -->

                    <form action="{{url('artikel/comment')}}" method="post">
                        @csrf
                        <h1 class="mb-4">Komentar</h1>
                        <textarea name="comment" id="" cols="100" rows="10"></textarea>
                        <br>
                        @if (Auth::user() != null)
                        <input type="hidden" name="fromuser" value="{{Auth::user()->id}}">
                        <input type="hidden" name="frompost" value="{{$artikel->id}}">
                        <input type="submit" class="mb-4">
                        @endif
                    </form>
                    @foreach($comment as $comments)
                    <div class="card mb-4">
                        <h5 class="card-header">
                            {{\App\User::select('name')->where('id', $comments->fromuser)->first()->name}}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{$comments->comment}}</h5>
                            <p class="card-text">{{$comments->created_at}}</p>
                        </div>
                    </div>
                    @endforeach

                </div><!-- /.blog-main -->

            </div><!-- /.row -->

        </main><!-- /.container -->

        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                    href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });

        </script>
</body>

</html>
