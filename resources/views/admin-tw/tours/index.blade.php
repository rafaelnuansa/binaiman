@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">Tambah Wisata</a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Gambar
                                    </th>
                                    <th>
                                        Judul
                                    </th>
                                    <th>
                                        Kategori
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tours as $key => $tour)
                                <tr>
                                    <td>
                                        <img src="{{ $tour->image }}" alt="{{ $tour->name }}" class="img-thumbnail" width="40">
                                    </td>
                                    <td>
                                        {{ $tour->name }}
                                    </td>
                                    <td>
                                        {{ $tour->tour_category->name ?? '' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.tours.edit', $tour->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
