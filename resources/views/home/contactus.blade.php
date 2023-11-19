<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WritesArts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/authentication.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">WritesArts</a> --}}
            <img src="{{asset('images/WriteArtsLogo.png')}}" alt="Logo" id="logo">
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
                        <a class="nav-link" href="{{route('MagazineView')}}">Magazine</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("ContactUsView") }}">Contact Us</a>
                    </li>
                </ul>
                @if (Session::has("UserName"))
                    <a href="#" class="btn btn-light text-primary d-flex justify-center">{{ Session::get('UserName', 'Anonymous') }}</a>
                    <a href="{{ route("Logout") }}" class="btn btn-danger d-flex justify-center">Logout</a>
                @else
                    <a href="{{route('RegisterView')}}" class="btn btn-light text-primary d-flex justify-center">signup</a>
                    <a href="{{route('LoginView')}}" class="btn btn-primary d-flex justify-center">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Container for the flipbook -->
    <div class="container p-5 bg-light d-flex justify-content-center">
        <div>
            <h2 class="text-center text-warning pt-5 pb-2">Contact Us</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Please write to us at <a href="mailto:thinkinkshare@gmail.com">thinkinkshare@gmail.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="copyright">
        <div class="copyright-contents bg-dark">
            <img src="{{asset('images/b9.jpg')}}">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </section>
</body>

</html>