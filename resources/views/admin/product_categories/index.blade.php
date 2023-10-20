@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Product Categories</h4>
                <a href="{{ route('admin.product_categories.create') }}"
                    class="btn btn-primary btn-sm float-right">Add Category</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="table-responsive">
                    
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <img src="{{ $category->image }}" alt="{{ $category->name }}"
                                        class="img-thumbnail" width="40">
                                </td>
                                <td>{{ $category->name }}</td>

                                <td>
                                    <a href="{{ route('admin.product_categories.show', $category->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.product_categories.edit', $category->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('admin.product_categories.destroy', $category->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
