@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.pokdarwis.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
    
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="table-responsive">
                
            <table class="table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pokdarwis as $pokdarwisItem)
                        <tr>
                            <td>
                                @if($pokdarwisItem->image)
                                    <img src="{{ $pokdarwisItem->image }}" alt="{{ $pokdarwisItem->name }}" width="40">
                                @else
                                    Gambar tidak tersedia
                                @endif
                            </td>
                            <td>{{ $pokdarwisItem->name }}</td>
                            <td>
                                <a href="{{ route('admin.pokdarwis.edit', $pokdarwisItem->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.pokdarwis.destroy', $pokdarwisItem->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            
            {{ $pokdarwis->links() }}
        </div>
      </div>
</div>
@endsection
