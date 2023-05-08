<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Toute les nouvelles allechante sur l'intelligence artificielle IA. Les nouvelles technologies utilisant l'intelligence artificielle IA">
    <title>Toute les nouvelles allechante sur l'intelligence artificielle IA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="liste.html">Ai News</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login">Poster</a></li>
            </ul>
        </div>
    </nav>
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Toute les nouveautés</h1><span class="subheading">sur l'intelligence artificielle</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                @foreach ($listeArticle as $listeArticles)
                <div class="post-preview"><a href="infoDetail/{{$listeArticles->id}}/{{str_replace(' ','-',$listeArticles->Titre)}}">
                    <meta>
                        <h2 class="post-title">{{$listeArticles->Titre}}</h2>
                        <h3 class="post-subtitle">{{$listeArticles->resume}}</h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">{{$listeArticles->Auteur}} on {{$listeArticles->created_at}}</a></p>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
