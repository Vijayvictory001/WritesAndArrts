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
        <h2 class="text-center text-warning py-5">Recent Editions</h2>
        @if (Session::has("UserType") && Session::get("UserType") === 1)  
            <div class="row d-flex justify-content-between">
                <h5 style="display: contents;">Please upload your edition (PDF only) here...</h5>

                <a href="{{route('UploadView')}}" class="btn btn-success w-25">Upload Files</a>
            </div>
        @else
            <div class="row d-flex justify-content-end d-none">
                <a href="#" class="btn btn-success w-25">Upload Files</a>
            </div>
        @endif
        <div class="row my-5">
            @if (!empty($files))
                @foreach ($files as $file)
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 90%;">
                            <img src="{{asset('images/b6.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title my-1">{{$file->Name}}</h5>
                                <div class="buttons d-flex justify-content-around my-2">
                                    <a href="{{route('ViewMagazine',['id' => $file->id])}}" class="btn btn-secondary">View</a>

                                    @if (Session::has("UserEmail"))
                                        <a href="{{route('DownloadMagazine',['id' => $file  ->id])}}" class="btn btn-success">Download</a>
                                    @else
                                        <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Login to download...">Download</button>
                                    @endif
                                    {{-- <a href="{{route('DownloadMagazine',['id' => $file->id])}}" class="btn btn-success">Download</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1>No Magazines are available...</h1>
            @endif            
        </div>  
    </div>
</section>

@endsection