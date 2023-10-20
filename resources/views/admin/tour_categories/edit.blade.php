@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Tour Category</h4>
                <a href="{{ route('admin.tour_categories.index') }}" class="btn btn-primary btn-sm float-right">Back to Categories</a>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.tour_categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/jpeg,image/jpg,image/png">
                    </div>
                    <div class="form-group mb-3">
                        <label>Current Image</label><br>
                        @if($category->image)
                            <img src="{{ $category->image }}" alt="Category Image" class="img-thumbnail" width="40">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
