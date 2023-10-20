<x-admin-layout>
    <div class="container mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
            <div class="py-4 px-6 sm:px-10">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">Daftar Halaman</h2>
                    <a href="{{ route('admin.pages.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-sm">Buat Halaman Baru</a>
                </div>
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mt-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded mt-4">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="overflow-x-auto mt-4">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Slug</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td class="px-4 py-2">{{ $page->title }}</td>
                                    <td class="px-4 py-2">{{ $page->slug }}</td>
                                    <td class="px-4 py-2">
                                       <a href="{{ route('admin.pages.edit', $page->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded text-sm">Edit</a>
                                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded text-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $pages->links() }}
            </div>
        </div>
    </div>

</x-admin-layout>
