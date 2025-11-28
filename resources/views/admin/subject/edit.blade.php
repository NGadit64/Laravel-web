<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
            Edit Mata Pelajaran
        </h2>

        <form action="{{ route('admin.subject.update', $subject->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- NAMA MAPEL -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Nama Mapel
                </label>
                <input type="text" name="nama" value="{{ $subject->nama }}"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                    dark:bg-gray-700 dark:text-gray-100">
            </div>

            <!-- DESKRIPSI -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Deskripsi
                </label>
                <textarea name="description" rows="4"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                    dark:bg-gray-700 dark:text-gray-100">{{ $subject->description }}</textarea>
            </div>

            <div class="flex justify-end">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg 
                    hover:bg-blue-700 transition">
                    Update
                </button>
            </div>

        </form>

    </div>
</x-admin.layout>
