@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Detail Halaman</h5>
            </div>
            <div class="card-body">
                <h3>{{ $page->title }}</h3>
                <p>{{ $page->content }}</p>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
