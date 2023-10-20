@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Wisata') }}</div>

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

                    <form method="POST" action="{{ route('admin.tours.update', $tour->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file"
                                    class="form-control @error('image') is-invalid @enderror" name="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nama Wisata') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name', $tour->name) }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" name="content" required>{!! old('content', $tour->content) !!}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Tambahkan skrip CKEditor 4 CDN di sini -->
                        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

                        <script>
                            // Inisialisasi CKEditor pada elemen dengan ID 'content'
                            CKEDITOR.replace('content');
                        </script>

                        <div class="form-group row mb-3">
                            <label for="tour_category_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Wisata Category') }}</label>

                            <div class="col-md-6">
                                <select id="tour_category_id"
                                    class="form-control @error('tour_category_id') is-invalid @enderror"
                                    name="tour_category_id" required>
                                    <option value="">Select Wisata Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('tour_category_id', $tour->tour_category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('tour_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if (auth()->user()->hasRole(['Admin', 'Kecamatan']))
                            <div class="form-group row mb-3">
                                <label for="village_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Village') }}</label>

                                <div class="col-md-6">
                                    <select id="village_id" class="form-control @error('village_id') is-invalid @enderror"
                                        name="village_id" required>
                                        <option value="">Select Village</option>
                                        @foreach ($villages as $village)
                                            <option value="{{ $village->id }}"
                                                {{ old('village_id', $tour->village_id) == $village->id ? 'selected' : '' }}>
                                                {{ $village->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('village_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Wisata') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
