@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pokdarwis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group mb-3">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group mb-3">
                    <label for="image">Gambar:</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.pokdarwis.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
