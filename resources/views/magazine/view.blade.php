@extends('layouts.master')
@section('main')
<section class="cards">
    <div class="container">
        <h2 class="text-center text-warning py-3">Recent Editions</h2>
        @if (Session::has("UserType") && Session::get("UserType") === 1)  
            <div class="row d-flex justify-content-between">
                <h5 style="display: contents;">Please upload your edition (PDF only) here...</h5>

                <a href="{{route('UploadView')}}" class="btn btn-success w-25">Upload Files</a>
            </div>
        {{--
        @else
            <div class="row d-flex justify-content-end d-none">
                <a href="#" class="btn btn-success w-25">Upload Files</a>
            </div>
        --}}
        @endif
        <div class="row my-5">
            @if (!empty($files))
                @foreach ($files as $file)
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="width: 90%;">
                            <img src="{{asset('images/b6.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title my-1">{{$file->Name}}</h5>
                                <div class="buttons d-flex justify-content-around my-2 showPdf-{{$file->id}}">
                                    <a OnClick="showPdf(`{{ $file->Path }}`, `{{$file->id}}`)" class="btn btn-secondary">View</a>
                                    {{-- <a href="{{route('ViewMagazine',['id' => $file->id])}}" class="btn btn-secondary">View</a>
                                    <span id="strFilePath" class="invisible">{{ $file->Path }}</span> --}}

                                    @if (Session::has("UserEmail"))
                                        <a href="{{route('DownloadMagazine',['id' => $file->id])}}" class="btn btn-success">Download</a>
                                    @else
                                        <a href="{{route('LoginView')}}" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Login to download...">Download</a>
                                        {{-- <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Login to download...">Download</button> --}}
                                    @endif
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