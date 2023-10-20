<x-admin-layout>
    <div class="md:flex md:items-center md:justify-center shadow">
        <div class="w-full">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="py-4 px-6 sm:px-10">
                    <div class="mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                            Posts
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Create new
                        </p>
                    </div>
                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <x-label :value="'Title'" />
                            <x-text-input type="text" class="form-input w-full mt-1" id="title" name="title"
                                value="{{ old('title') }}" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-label :value="'Title English'" />
                            <x-text-input type="text" class="form-input w-full mt-1" id="title" name="title"
                                value="{{ old('title') }}" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-label :value="'Title Arabic'" />
                            <x-text-input type="text" class="form-input w-full mt-1" id="title" name="title"
                                value="{{ old('title') }}" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-600">Thumbnail</label>
                            <input type="file"
                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                file:bg-transparent file:border-0
                                file:bg-gray-100 file:mr-4
                                file:py-2 file:px-4
                                dark:file:bg-gray-700 dark:file:text-gray-400
                                id="image"
                                name="image" accept="image/*" required>

                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-label :value="'Category'" />
                            <select
                                class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                id="category_id" name="category_id" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-label :value="'Content'" />
                            <div id="quill-editor" class="dark:text-white dark:bg-gray-900" style="height: 400px"></div>
                            <input type="hidden" id="quill-content" name="content" value="{{ old('content') }}">
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-label :value="'Content En'" />
                            <div id="quill-editor_en" class="dark:text-white dark:bg-gray-900" style="height: 400px"></div>
                            <input type="hidden" id="quill-content_en" name="content_en" value="{{ old('content_en') }}">
                            <x-input-error :messages="$errors->get('content_en')" class="mt-2" />
                        </div>

                        <div class="mt-6">
                            <x-button :type="'submit'" :color="'gray'" :label="'Save'"></x-button>
                        </div>
                    </form>
                </div>
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


            quill.on('text-change', function() {
                document.getElementById('quill-content').value = quill.root.innerHTML;
            });

            quill_en.on('text-change', function() {
                document.getElementById('quill-content_en').value = quill.root.innerHTML;
            });
        </script>
    @endpush
</x-admin-layout>
