@extends('layouts.admin', ['title' => 'Kategori Posts'])

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
        <div class="card-header">

        <a href="{{ route('admin.programs.create') }}" class="btn btn-primary">Create Program</a>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $program)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                        <img src="{{ $program->image }}" alt="" class="img-fluid d-block h-100">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="#" class="text-reset">{{ $program->name }}</a></h5>
                                        <span class="badge bg-success">{{ $program->slug }}</span>
                                    </div>
                                </div>

                            <td><span class="badge bg-dark">{{ $program->created_at }}</span></td>
                            <td>
                                <a href="{{ route('admin.programs.edit', $program->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $programs->links() }}
        </div>
       </div>
    </div>
</div>
@endsection
