<!DOCTYPE html>
<html lang="fr">

<head>
    @foreach ($detail as $details)
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{$details->Titre}}">
    <meta name="author" content="{{$details->Auteur}}">
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{$details->resume}}">
    <title>{{$details->Titre}}</title>
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://hot-coil-production.up.railway.app/assets/css/Login-Form-Clean.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="{{route('login')}}">Ai News</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Poster</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('accueil')}}">Home</a></li>
            </ul>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('{{asset('public/uploads/')}}/{{$details->image}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <h1>{{$details->Titre}}</h1>
                        <span class="meta">Posted by&nbsp;<a href="#">{{$details->Auteur}}</a>&nbsp;on {{$details->created_at}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    @php
                        echo $details->contenu
                    @endphp
                </div>
            </div>
        </div>
    </article>
    @endforeach
    
    <script src="https://hot-coil-production.up.railway.app/assets/bootstrap/js/bootstrap.min.js'"></script>
    <script src="https://hot-coil-production.up.railway.app/assets/js/clean-blog.js'"></script>
</body>

</html>
