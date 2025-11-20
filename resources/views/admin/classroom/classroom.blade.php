<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">

                <!-- Header -->
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <!-- Search -->
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 
                                            4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" placeholder="Cari kelas..."
                                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                    focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                    dark:text-gray-100 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </form>
                    </div>

                    <!-- Tombol Tambah -->
                    <div class="w-full md:w-auto flex items-center justify-end">
                        <a href="{{ route('admin.classroom.create') }}"
                            class="flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 
                            focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 
                            dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 
                                    110 2h-5v5a1 1 0 11-2 0v-5H4a1 
                                    1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambah Kelas
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
                        <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-4 py-3 w-16">No</th>
                                <th scope="col" class="px-4 py-3">Nama Kelas</th>
                                <th scope="col" class="px-4 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classrooms as $classroom)
                                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-blue-700 dark:hover:bg-gray-750 transition">
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-3">{{ $classroom->kelas }}</td>
                                    <td class="px-4 py-3 text-right">
                                    <a href="{{ route('admin.classroom.edit', $classroom->id) }}"
                                        class="text-blue-600 hover:underline dark:text-blue-400 mr-3">
                                             Edit
                                                </a>

                                        <!-- <form action="{{ route('admin.classroom.destroy', $classroom->id) }}" method="POST" class="inline"
                                            onsubmit="return confirm('Yakin ingin menghapus kelas ini?')">
                                                @csrf
                                                 @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:underline dark:text-red-400">
                                                 Hapus
                                        </button>
                                            </form> -->

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer -->
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center 
                    space-y-3 md:space-y-0 p-4 border-t border-gray-200 dark:border-gray-700" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Menampilkan <span class="font-semibold text-gray-900 dark:text-white">
                            {{ $classrooms->count() }}</span> data
                    </span>
                </nav>
            </div>
        </div>
    </section>
</x-admin.layout>
