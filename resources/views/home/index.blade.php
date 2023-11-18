@extends('layouts.master')
@section('main')
    

    <div class="carousel slide" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="bg_img" class="d-block w-100" src="{{asset('images/b9.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>WritesArts is more than just a platform; it's a community of young storytellers and artists. Here, they can inspire and be inspired, creating a world of wonder through their own lens.</p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b10.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
                    <p>WritesArts is more than just a platform; it's a community of young storytellers and artists. Here, they can inspire and be inspired, creating a world of wonder through their own lens.</p>
                    <!-- <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="{{asset('images/b11.jpg')}}">
                <div class="carousel-caption" id="slider-contents">
                    <h5>Welcome to WritesArts</h5>
                    <h3>Think. Ink. Share.</h3>
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


    <!-- <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Welcome to <span class="text-warning">WritesArts</span></h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quod
                            assumenda officiis at
                            nostrum, inventore fugit animi reprehenderit error ex sunt, optio, est culpa maxime dolorum
                            sapiente suscipit officia odio! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Optio, consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ut.
                        </p><a class="btn btn-warning" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-5">
                    <div class="about-img"><img alt="" class="img-fluid" src="{{asset('images/b8.jpeg')}}"></div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="cards">
        <div class="container">
            <h2 class="text-center text-warning pt-4">How It Works:</h2>
            <div class="row">
                <div class="w-75 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <ol>
                                <li><strong>Think:</strong> Consider a topic for your writing or drawing.</li>
                                <li><strong>Ink:</strong> Use a pen or brush to bring your imagination/idea to life on paper or a board.</li>
                                <li><strong>Share:</strong> Email your creation to <a href="mailto:thinkinkshare@gmail.com">thinkinkshare@gmail.com</a>.</li>
                            </ol>

                            <p>The 14th and 30th of each month are the submission deadlines. Your creativity will be published on the 1st and 15th of every month.</p>
                            <p>Would you like to be an editor for an edition? Absolutely! You can become an editor by sending a request to <a href="mailto:thinkinkshare@gmail.com">thinkinkshare@gmail.com</a>. We will respond with details and support to ensure your success. It's fun and fulfilling.</p>
                            <p>Here are a few topic tips: Write or draw based on your imagination. Explore themes like a country, a personality, fun facts, a friend, or space. The possibilities are endless. Please avoid controversial topics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards">
        <div class="container">
            <h2 class="text-center text-warning py-5">Recent Editions</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 invisible">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/home.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title my-5">Previous Edition</h5>
                            <!-- <a href="#" class="btn btn-primary mt-3">Read More</a> -->
                        </div>
                    </div>
                </div>
                {{-- @foreach ($files as $file) --}}
                @if (!empty($files))
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 100%;">
                            <img src="{{asset('images/b6.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title my-1">{{$files->Name}}</h5>
                                <div class="buttons d-flex justify-content-around my-2">
                                    <a href="{{route('ViewMagazine',['id' => $files->id])}}" class="btn btn-secondary">View</a>
                                    
                                    @if (Session::has("UserEmail"))
                                        <a href="{{route('DownloadMagazine',['id' => $files->id])}}" class="btn btn-success">Download</a>
                                    @else
                                        <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Login to">Download</button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- @endforeach --}}
                <div class="col-lg-4 col-md-6 invisible">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/b8.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title my-5">Previous Season</h5>
                            
                            <!-- <a href="" class="btn btn-primary mt-4 mb-1">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="about section-padding">
        <h2 class="text-warning text-center py-5">About Us</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('images/b9.jpeg')}}" class="img-fluid" alt="Aboutlogo">
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1>Welcome To WritesArts</h1>
                    <p>At WritesArts, we believe that every child has a unique story to tell and a world of creativity to share. <br><br>Our platform is a canvas for children to bring their handwritten articles and imaginative drawings to life,where their creativity knows no bounds.</p>
                    <button class="btn btn-danger">Read More</button>
                </div>

            </div>
        </div>
    </section> -->
@endsection