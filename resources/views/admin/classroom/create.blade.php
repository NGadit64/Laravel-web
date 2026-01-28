<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4 text-white">
            Tambah Data Kelas
        </h1>

        <form action="{{ route('admin.classroom.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="kelas" class="block text-gray-300 font-semibold mb-2">
                    Nama Kelas
                </label>

                <input type="text" name="kelas" id="kelas"
                    class="border border-gray-600 
                           bg-gray-700 
                           text-gray-200 
                           rounded w-full p-2
                           focus:outline-none focus:ring focus:ring-blue-500"
                    placeholder="Contoh: 10 PPLG 1, 11 RPL 2">

                @error('kelas')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 
                           text-white px-4 py-2 rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
