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
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b10.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <strong>Welcome to WritesArts</strong><br />
                    <strong>Think. Ink. Share.</strong>
                    <p>WritesArts is more than just a platform; it's a community of young storytellers and artists. Here, they can inspire and be inspired, creating a world of wonder through their own lens.</p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b11.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <strong>Welcome to WritesArts</strong><br />
                    <strong>Think. Ink. Share.</strong>
                    <p>WritesArts is more than just a platform; it's a community of young storytellers and artists. Here, they can inspire and be inspired, creating a world of wonder through their own lens.</p>
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

    <section class="cards">
        <div class="container">
            <h2 class="text-center text-warning pt-5 pb-2">About Us</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Welcome to WritesArts - Where Youth Voices Unleash Creativity!</h5>
                            <div class="text-start">
                                <p>At WritesArts, we believe in young minds' power and unique perspectives. Our magazine is not just a publication; it's a vibrant canvas where the voices of the youth come alive through the written word. Every article, poem, and artwork you find in our magazine is a testament to the untamed imagination and vibrant energy of the youth. We cover various topics – from art and culture to technology and lifestyle. Our handwritten approach adds a personal touch, making each page a unique piece of art.</p>
                                <h3>Why Handwritten?</h3>
                                <p>In a digital age, we find beauty in the simplicity and authenticity of handwritten expression. Each stroke of the pen represents the genuine thoughts and emotions of the young minds behind [Your Magazine Name]. It's a celebration of the tangible, the imperfect, and the real.</p>
                                <p>With the rise of digital communication, handwriting is dwindling among youth, impacting personal and cognitive development. The act of writing by hand enhances neural connections and promotes better learning and memory retention. Emphasizing the importance of handwriting ensures a balanced approach to communication skills in the evolving technological landscape.</p>
                                <h3>Join Us:</h3>
                                <p>Whether you're a contributor, reader, or fellow enthusiast of youth culture, we invite you to be a part of our journey. Explore the pages, share your thoughts, and let's build a community that celebrates the richness of youth expression.</p>
                                <br />
                                <strong class="text-center">Thank you for being a part of WritesArts. Let's make every page a canvas for the boundless creativity of the youth!</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
@endsection