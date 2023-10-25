@extends('layouts.admin', ['title' => 'Teams'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.teams.create') }}" class="btn btn-primary mb-3">Create Team</a>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $team->image }}" alt="{{ $team->name }}" height="45"></td>
                                    <td><b>{{ $team->name }}</b><br>
                                  <span class="badge bg-dark">  {{ $team->job }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.teams.show', $team->id) }}"
                                                class="btn btn-sm btn-info">Detail</a>
                                            <a href="{{ route('admin.teams.edit', $team->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Anda yakin ingin menghapus team ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $teams->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
