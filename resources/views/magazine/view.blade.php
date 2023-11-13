@extends('layouts.master')
@section('main')
<div class="backimage">
    <img src="{{asset('images/b10.jpeg')}}" alt="background-image">
    <div id="contents">
        <h1 class="text-danger">Magazine Files</h1>
        <h3 class="text-warning">Click me and Enjoy</h3>
        @if (Session::has("UserType") && Session::get("UserType") === 1)  
            <a href="{{route('UploadView')}}" class="btn btn-success">Upload Files</a>
        @else
            <a href="#" class="btn btn-success d-none">Upload Files</a>
        @endif
    </div>
</div>
<section class="cards">
    <div class="container">
        <h2 class="text-center text-warning py-5">Recent Editions</h2>
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