<x-admin.layout>
    <x-slot:judul>Edit Kelas</x-slot:judul>

    <div class="mx-auto max-w-2xl p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">
            Edit Data Kelas
        </h2>

        <form action="{{ route('admin.classroom.update', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 mb-1">Nama Kelas</label>
                <input type="text" name="kelas" value="{{ $classroom->kelas }}"
                       class="w-full border rounded-lg px-3 py-2 bg-gray-100 dark:bg-gray-700 
                              text-gray-900 dark:text-gray-100 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </form>
    </div>
</x-admin.layout>
