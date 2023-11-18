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
</div>
<section class="magazine my-5">
    <h2 class="text-center text-warning mb-5">Magazines</h2>
    <div class="container">
        <div class="row">
            @if(session('success'))
                <h1 class="btn btn-success">{{session('success')}}</h1>
            @endif
            <form action="{{route('UploadMagazine')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">File Name</label>
                    <input type="text" class="form-control" name="filename" placeholder="File name">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Upload File</label>
                    <input class="form-control" name="file" type="file">
                  </div>
                  <div class="my-5">
                    <button class="btn btn-success">Save File</button>
                  </div>
            </form>
        </div>
    </div>
</section>
<div class="container">
    <h2 class="text-warning text-center py-3">Dashboard</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">FileName</th>
            <th scope="col">PDF File</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if ($files)
                @foreach ($files as $file)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$file->Name}}</td>
                        <td>{{$file->Path}}</td>
                        <td><a href="{{route('DeleteMagazine',['id' => $file->id])}}" class="text-danger">Delete</a></td>
                    </tr>
                @endforeach
            @else
                <tr><td class="text-center" colspan=4>No magazines found...</td></tr>
            @endif
        </tbody>
      </table>
</div>
@endsection