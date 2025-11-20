<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">
            Tambah Data Siswa
        </h1>

        <form action="{{ route('admin.student.store') }}" method="POST">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Nama Lengkap
                </label>
                <input type="text" name="name"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2"
                    required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Tanggal Lahir
                </label>
                <input type="date" name="birthday"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2"
                    required>
                @error('birthday')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gender -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Gender</label>

                <select name="gender"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2"
                    required>
                    <option value="">-- Pilih Gender --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kelas -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Pilih Kelas
                </label>

                <select name="classroom_id"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2"
                    required>
                    <option value="">-- Pilih Kelas --</option>

                    @foreach($classrooms as $room)
                        <option value="{{ $room->id }}">{{ $room->kelas }}</option>
                    @endforeach
                </select>

                @error('classroom_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Email
                </label>
                <input type="email" name="email"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">
                    Alamat
                </label>
                <textarea name="address" rows="3"
                    class="border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-700 
                           text-gray-900 dark:text-gray-200 rounded w-full p-2"></textarea>

                @error('address')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
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
