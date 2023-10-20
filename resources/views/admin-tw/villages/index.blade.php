@extends('layouts.admin', ['title' => 'Daftar Desa'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.villages.create') }}" class="btn btn-primary">Tambah Desa Baru</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama Desa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($villages as $village)
                                <tr>
                                    <td>
                                        @if ($village->image)
                                            <img src="{{ $village->image }}"
                                                alt="{{ $village->name }}" width="45">
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </td>
                                    <td>{{ $village->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.villages.edit', $village->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.villages.destroy', $village->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus desa ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
