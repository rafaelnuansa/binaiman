@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
        <div class="card-header">
            <h5>Tambah Desa Baru</h5>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.villages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Desa</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Desa</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
       </div>
    </div>
</div>
@endsection
