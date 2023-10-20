@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Postingan</h2>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-3">Kembali ke Daftar Postingan</a>
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text"><strong>Kategori:</strong> {{ $post->category->name }}</p>
                        <p class="card-text"><strong>Isi Postingan:</strong></p>
                        <p>{!! nl2br(e($post->content)) !!}</p>
                        <div class="mb-3">
                            <strong>Gambar Postingan:</strong><br>
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" width="400">
                        </div>
                        <p class="card-text"><small class="text-muted">Dibuat pada:
                                {{ $post->created_at->format('d M Y H:i:s') }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
