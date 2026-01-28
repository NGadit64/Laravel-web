<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <section class="bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            <div class="bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden border border-gray-700">

                <!-- HEADER -->
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                    <!-- SEARCH -->
                    <div class="w-full md:w-1/2">
    <form method="GET">
        <label for="guardian-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 
                        1110.89 3.476l4.817 4.817a1 1 0 
                        01-1.414 1.414l-4.816-4.816A6 6 0 
                        012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <input type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari wali..."
                class="border border-gray-300 text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 
                bg-gray-700 border-gray-600 placeholder-gray-400 
                dark:text-gray-100">
        </div>
    </form>
</div>


                    <!-- BUTTON ADD -->
                    <div class="w-full md:w-auto flex justify-end">
                        <a href="{{ route('admin.guardian.create') }}"
                            class="flex items-center text-white bg-blue-600 hover:bg-blue-700 
                            dark:bg-blue-500 dark:hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 
                            font-medium rounded-lg text-sm px-4 py-2">

                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 1 110 2h-5v5a1 1 0 11-2 
                                    0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>

                            Tambah Wali
                        </a>
                    </div>

                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-200">
        <thead class="text-xs uppercase bg-gray-700 dark:text-gray-300">
            <tr>
                <th class="px-4 py-3 w-12">No</th>
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Pekerjaan</th>
                <th class="px-4 py-3">Telepon</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3 text-right">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($guardians as $guardian)
                <tr class="border-b border-gray-700 hover:bg-red-750 transition">

                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">{{ $guardian->name }}</td>
                    <td class="px-4 py-3">{{ $guardian->job }}</td>
                    <td class="px-4 py-3">{{ $guardian->phone }}</td>
                    <td class="px-4 py-3">{{ $guardian->email }}</td>

                    <td class="px-4 py-3 text-right">
                        <div class="flex justify-end gap-2">

                            <a href="{{ route('admin.guardian.edit', $guardian->id) }}"
                               class="hover:underline text-blue-400">
                                Edit
                            </a>

                            <form action="{{ route('admin.guardian.destroy', $guardian->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data wali ini?')">
                                @csrf
                                @method('DELETE')

                                <button class="hover:underline text-red-400">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-3 text-center text-gray-400">
                        Data wali tidak ditemukan
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


            </div>
            <nav class="flex justify-between items-center p-4 border-t border-gray-700">
    <span class="text-sm text-gray-400">
        Menampilkan <b>{{ $guardians->count() }}</b> wali
    </span>
</nav>
@if(request('search'))
    <span class="text-sm text-gray-400">
        Hasil pencarian untuk: 
        <span class="text-blue-400 font-semibold">
            "{{ request('search') }}"
        </span>
    </span>
@endif
        </div>
    </section>
    

</x-admin.layout>
