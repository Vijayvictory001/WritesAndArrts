<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Flipbook</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            
            <img src="<?php echo e(asset('images/WriteArtsLogo.jpeg')); ?>" alt="Logo" id="logo">
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
                </ul>
                <a href="#" class="btn btn-light text-primary d-flex justify-center disabled">signup</a>
                <a href="#" class="btn btn-primary d-flex justify-center disabled">Login</a>
            </div>
        </div>
    </nav>
    <div class="carousel slide" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="bg_img" class="d-block w-100" src="<?php echo e(asset('images/b9.webp')); ?>">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>Writesarts is more than just a platform; it's a community of young storytellers and artists.Here,they can inspire and be inspired,creating a world of wonder through their own lens. <span>How it works?</span></p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="<?php echo e(asset('images/b10.jpeg')); ?>">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>Writesarts is more than just a platform; it's a community of young storytellers and artists.Here,they can inspire and be inspired,creating a world of wonder through their own lens. <span>How it works?</span></p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="<?php echo e(asset('images/b11.jpeg')); ?>">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>Writesarts is more than just a platform; it's a community of young storytellers and artists.Here,they can inspire and be inspired,creating a world of wonder through their own lens. <span>How it works?</span></p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
            data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div>

    <!-- <section class="copyright">
        <div class="copyright-contents bg-dark">
            <img src="<?php echo e(asset('images/b9.webp')); ?>">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </section> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html><?php /**PATH D:\Soustr\Works\WritesAndArts\WritesAndArts\resources\views/about.blade.php ENDPATH**/ ?>