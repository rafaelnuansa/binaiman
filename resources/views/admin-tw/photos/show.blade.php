@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Detail Foto</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <br>
                            <img src="{{ $photo->image }}" alt="Gambar Foto" width="300">
                        </div>
                        <div class="form-group">
                            <label for="caption">Keterangan</label>
                            <p>{{ $photo->caption }}</p>
                        </div>
                        <a href="{{ route('admin.photos.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
