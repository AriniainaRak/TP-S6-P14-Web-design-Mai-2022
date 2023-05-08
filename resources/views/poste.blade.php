<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Poster de nouveaux articles sur IA</title>
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="logout">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Poster des nouvelles</h1><span class="subheading">sur l'intelligence artificielle</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="contact-clean">
            <form method="post" action="posterArticle" enctype="multipart/form-data">
                @csrf
                @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <h2 class="text-center">Poster</h2>
                <div class="mb-3"><input class="form-control" type="text" name="Titre" placeholder="Titre"></div>
                <div><span class="text-danger">@error('Titre'){{$message}}@enderror</span></div>
                <div class="mb-3"><input class="form-control" type="text" name="Auteur" placeholder="Auteur"></div>
                <div><span class="text-danger">@error('Auteur'){{$message}}@enderror</span></div>
                <div class="mb-3"><input class="form-control" type="text" name="resume" placeholder="Resume"></div>
                <div><span class="text-danger">@error('resume'){{$message}}@enderror</span></div>
                <div class="mb-3"><input class="form-control" type="file" name="Image"></div>
                <div><span class="text-danger">@error('Image'){{$message}}@enderror</span></div>
                <div class="mb-3"><textarea class="form-control" name="Contenu" id="editor"></textarea></div>
                <div><span class="text-danger">@error('Contenu'){{$message}}@enderror</span></div>
                <div class="text-center mb-3"><button class="btn btn-primary text-center" type="submit" style="background: rgb(0,0,0);border-radius: 9px;">send </button></div>
            </form>
        </section>
    </div>
    <hr>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>
