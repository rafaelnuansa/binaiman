<x-admin-layout>
    <div class="container mx-auto">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="py-4 px-6 sm:px-10">
                    <div class="mb-8">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800 dark:text-gray-200">
                            Buat Halaman Baru
                        </h2>
                    </div>
                    <form action="{{ route('admin.pages.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-600">Judul Halaman</label>
                            <input type="text" class="form-input w-full mt-1" id="title" name="title"
                                value="{{ old('title') }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-600">Konten Halaman</label>
                            <div id="editor" class="dark:text-white dark:bg-gray-900" style="height: 400px;"></div>
                            <input type="hidden" id="content" name="content" value="{{ old('content') }}">
                        </div>

                        <div class="mt-6">
                            <x-button :label="'Simpan'" />
                            <a href="{{ route('admin.pages.index') }}"
                                class="btn btn-secondary">Kembali</a>
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
            var quill = new Quill('#editor', {
                theme: 'snow',
            });

            quill.on('text-change', function () {
                document.getElementById('content').value = quill.root.innerHTML;
            });
        </script>
    @endpush
</x-admin-layout>
