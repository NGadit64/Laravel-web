<x-admin.layout>
    <x-slot:judul>Edit Kelas</x-slot:judul>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">
            Edit Data Kelas
        </h1>

        <form action="{{ route('admin.classroom.update', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="kelas" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Nama Kelas
                </label>

                <input type="text" name="kelas" id="kelas"
                    value="{{ $classroom->kelas }}"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 
                           rounded w-full p-2
                           focus:outline-none focus:ring focus:ring-blue-500">

                @error('kelas')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
