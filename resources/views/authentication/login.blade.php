<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/authentication.css')}}">
    <title>Magazine-login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">WritesArts</a> --}}
            <img src="{{asset('images/WriteArtsLogo.jpeg')}}" alt="Logo" id="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Magazine</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("ContactUsView") }}">Contact Us</a>
                    </li>
                </ul>
                <a href="{{route('RegisterView')}}" class="btn btn-light text-primary d-flex justify-center">signup</a>
                <a href="{{route('LoginView')}}" class="btn btn-primary d-flex justify-center">Login</a>
            </div>
        </div>
    </nav>
    <div class="container p-5 bg-light" id="user">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-6">
                <img src="{{asset('images/home.webp')}}" alt="Login-Image" class="img-fluid">
            </div>
            
            <div class="col-lg-6">
                @if(!empty($success))
                    <div class="alert alert-success" role="alert">
                        {{ $success }}
                    </div>
                @endif
                @if(!empty($error))
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endif
                <form action="{{route('Login')}}" method="POST">
                    @csrf
                    <h2>Hello, Welcome!</h2>
                    <p class="my-2 text-secondary">Login to continue</p>
                    <div class="my-3 ">
                        <input type="text" name="email" placeholder="Enter the username" class="form-control shadow-none"
                            autofocus="true">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Enter the password"
                            class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <p class="text-secondary">create a new account? <a href="/register">signup</a></p>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success shadow-none w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="copyright">
        <div class="copyright-contents bg-dark">
            <img src="{{asset('images/b9.webp')}}">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </section>

</body>

</html>