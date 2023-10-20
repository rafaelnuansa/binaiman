@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Halaman</h5>
                <p class="card-text">{{ $pageCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Foto Galeri</h5>
                <p class="card-text">{{ $photoCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Postingan</h5>
                <p class="card-text">{{ $postCount }}</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Slider</h5>
                <p class="card-text">{{ $sliderCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pengguna</h5>
                <p class="card-text">{{ $userCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
