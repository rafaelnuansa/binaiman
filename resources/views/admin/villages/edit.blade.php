@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Desa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.villages.update', $village->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Desa</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $village->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Desa</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
