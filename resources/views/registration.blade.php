<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="registration">
    <meta name="robots" content="noindex, nofollow">
    <title>Registration</title>
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
        <div class="container"><a class="navbar-brand" href="{{route('login')}}">Ai News</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
            </ul>
        </div>
    </nav>
    <section class="login-clean">
        <form method="post" action="regAdmin">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration">
                <p style="font-size: 35px;color: rgb(4,0,1);">Registration</p>
            </div>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Nom"></div>
            <div><span class="text-danger">@error('name'){{$message}}@enderror</span></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div><span class="text-danger">@error('email'){{$message}}@enderror</span></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div><span class="text-danger">@error('password'){{$message}}@enderror</span></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(0,0,0);">register</button></div><a class="forgot" href="login">Already registered?</a>
        </form>
    </section>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
