@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Daftar Foto</h5>
                    <a href="{{ route('admin.photos.create') }}" class="btn btn-primary btn-sm float-right">Tambah Foto</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($photos as $photo)
                                    <tr>
                                        <td>
                                            <img src="{{ $photo->image }}" alt="{{ $photo->caption }}" class="img-thumbnail"
                                                width="100">
                                        </td>
                                        <td>{{ $photo->caption }}</td>
                                        <td>
                                            <a href="{{ route('admin.photos.edit', $photo->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.photos.destroy', $photo->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Tidak ada foto.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $photos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
