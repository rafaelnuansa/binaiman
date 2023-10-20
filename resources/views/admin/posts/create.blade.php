@extends('layouts.admin', ['title' => 'Create New Post'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Create New Post</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                            <div class="col-lg-3">
                                <div class="nav nav-pills flex-column nav-pills-tab custom-verti-nav-pills" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active show" id="custom-v-pills-indonesia-tab" data-bs-toggle="pill"
                                        href="#custom-v-pills-indonesia" role="tab"
                                        aria-controls="custom-v-pills-indonesia" aria-selected="true">
                                        Indonesia
                                    </a>
                                    <a class="nav-link" id="custom-v-pills-english-tab" data-bs-toggle="pill"
                                        href="#custom-v-pills-english" role="tab" aria-controls="custom-v-pills-english"
                                        aria-selected="false">
                                        English
                                    </a>
                                    <a class="nav-link" id="custom-v-pills-arabic-tab" data-bs-toggle="pill"
                                        href="#custom-v-pills-arabic" role="tab" aria-controls="custom-v-pills-arabic"
                                        aria-selected="false">
                                        Arabic</a>

                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Thumbnail</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*" required>
                                    </div>



                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea type="text" class="form-control" id="meta_description" name="meta_description">{{ old('meta_description') }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                        <textarea type="text" class="form-control" id="meta_keyword" name="meta_keyword">{{ old('meta_keyword') }}</textarea>
                                    </div>

                                </div>
                            </div> <!-- end col-->
                            <div class="col-lg-9">
                                <div class="tab-content text-muted mt-3 mt-lg-0">
                                    <div class="tab-pane fade active show" id="custom-v-pills-indonesia" role="tabpanel"
                                        aria-labelledby="custom-v-pills-indonesia-tab">
                                        <div class="d-flex mb-4">
                                            <div class="flex-grow-1 ms-3">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title Indonesia</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ old('title') }}" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Content Indonesia</label>
                                                    <div id="quill-editor" style="height: 400px;"></div>
                                                    <input type="hidden" id="quill-content" name="content"
                                                        value="{{ old('content') }}">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="custom-v-pills-english" role="tabpanel"
                                        aria-labelledby="custom-v-pills-english-tab">
                                        <div class="d-flex mb-4">
                                            <div class="flex-grow-1 ms-3">
                                                <div class="mb-3">
                                                    <label for="title_en" class="form-label">English Title</label>
                                                    <input type="text" class="form-control" id="title_en"
                                                        name="title_en" value="{{ old('title_en') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="content_en" class="form-label">English Content</label>
                                                    <div id="quill-editor_en" style="height: 400px;"></div>
                                                    <input type="hidden" id="quill-content_en" name="content_en"
                                                        value="{{ old('content_en') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="custom-v-pills-arabic" role="tabpanel"
                                        aria-labelledby="custom-v-pills-arabic-tab">
                                        <div class="d-flex mb-4">
                                            <div class="flex-grow-1 ms-3">
                                                <div class="mb-3">
                                                    <label for="title_ar" class="form-label">Arabic Title</label>
                                                    <input type="text" class="form-control" id="title_ar"
                                                        name="title_ar" value="{{ old('title_ar') }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="content_ar" class="form-label">Arabic Content</label>
                                                    <div id="quill-editor_ar"
                                                        style="height: 400px;direction: rtl;  text-align: right;"></div>
                                                    <input type="hidden" id="quill-content_ar" name="content_ar"
                                                        value="{{ old('content_ar') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                        <div class="mt-4">

                            <button type="submit" class="btn btn-success">Simpan Postingan</button>
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary ">Kembali
                                Postingan</a>
                        </div>
                    </form>
                </div><!-- end card-body -->
            </div>
        </div>
    </div>

    @push('styles')
        <!-- quill css -->
        <link href="{{ asset('themes/apps') }}/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('themes/apps') }}/assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('themes/apps') }}/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
    @endpush

    @push('scripts')
        <script src="{{ asset('themes/apps') }}/assets/libs/quill/quill.min.js"></script>
        <script>
            var quill = new Quill('#quill-editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': '1'
                        }, {
                            'header': '2'
                        }, ],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['bold', 'italic', 'underline'],
                        [{
                            'align': []
                        }],
                        ['link'],
                        ['clean']
                    ]
                },
            });

            var quill_en = new Quill('#quill-editor_en', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': '1'
                        }, {
                            'header': '2'
                        }, ],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['bold', 'italic', 'underline'],
                        [{
                            'align': []
                        }],
                        ['link'],
                        ['clean']
                    ]
                },
            });

            var quill_ar = new Quill('#quill-editor_ar', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': '1'
                        }, {
                            'header': '2'
                        }, ],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['bold', 'italic', 'underline'],
                        [{
                            'align': []
                        }],
                        ['link'],
                        ['clean'],
                    ]
                },
            });

            quill.on('text-change', function() {
                document.getElementById('quill-content').value = quill.root.innerHTML;
            });
            quill_en.on('text-change', function() {
                document.getElementById('quill-content_en').value = quill.root.innerHTML;
            });
            quill_ar.on('text-change', function() {
                document.getElementById('quill-content_ar').value = quill.root.innerHTML;
            });

            quill_ar.format('direction', 'rtl');
            quill_ar.format('align', 'right');
        </script>
    @endpush
@endsection
