@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Desa</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $village->name }}</h5>
                        <p class="card-text"><strong>Slug:</strong> {{ $village->slug }}</p>
                        <p class="card-text"><strong>Gambar:</strong></p>
                        @if ($village->image)
                            <img src="{{ asset('storage/' . $village->image) }}" alt="{{ $village->name }}" width="200">
                        @else
                            Tidak ada gambar
                        @endif
                        <a href="{{ route('admin.villages.edit', $village->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.villages.destroy', $village->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus desa ini?')">Hapus</button>
                        </form>
                        <a href="{{ route('admin.villages.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
