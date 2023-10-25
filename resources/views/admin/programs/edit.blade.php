@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Program</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.programs.update', $page->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Program Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $page->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Content Description</label>
                            <textarea class="form-control" id="editor" name="description" rows="5" required>{{ $page->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
