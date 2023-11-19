@extends('layouts.master')
@section('main')
    <div class="carousel slide" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="bg_img" class="d-block w-100" src="{{asset('images/b9.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <strong>Welcome to WritesArts</strong><br />
                    <strong>Think. Ink. Share.</strong>
                    <p>WritesArts is more than just a platform; it's a community of young storytellers and artists. Here, they can inspire and be inspired, creating a world of wonder through their own lens.</p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
    </div>
    <section class="cards">
        <div class="container">
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
    </section>
@endsection