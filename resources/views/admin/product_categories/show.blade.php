@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Category Details</h4>
                        <a href="{{ route('admin.product_categories.index') }}" class="btn btn-primary btn-sm float-right">Back to Categories</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $category->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label><br>
                            @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" class="img-thumbnail" width="200">
                            @else
                                <p>No image available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
