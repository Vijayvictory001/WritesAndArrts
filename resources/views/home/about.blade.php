@extends('layouts.master')
@section('main')
    <div class="carousel slide" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="bg_img" class="d-block w-100" src="{{asset('images/b9.webp')}}">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>Writesarts is more than just a platform; it's a community of young storytellers and artists.Here,they can inspire and be inspired,creating a world of wonder through their own lens. <span>How it works?</span></p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b10.jpeg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>Writesarts is more than just a platform; it's a community of young storytellers and artists.Here,they can inspire and be inspired,creating a world of wonder through their own lens. <span>How it works?</span></p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b11.jpeg')}}">
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
            <img src="{{asset('images/b9.webp')}}">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </section> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
@endsection