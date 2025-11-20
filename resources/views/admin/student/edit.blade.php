<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit Data Siswa</h1>

        <form action="{{ route('admin.student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block mb-2">Nama</label>
            <input type="text" name="name" class="border p-2 rounded w-full border p-2 rounded w-full bg-gray-900"
                   value="{{ $student->name }}">

            <label class="block mt-3 mb-2">Tanggal Lahir</label>
            <input type="date" name="birthday" class="border p-2 rounded w-full border p-2 rounded w-full bg-gray-900"
                   value="{{ $student->birthday }}">

            <label class="block mt-3 mb-2">Jenis Kelamin</label>
            <select name="gender" class="border p-2 rounded w-ful border p-2 rounded w-full bg-gray-900">
                <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <label class="block mt-3 mb-2">Kelas</label>
            <select name="classroom_id" class="border p-2 rounded w-full border p-2 rounded w-full bg-gray-900">
                @foreach ($classrooms as $class)
                    <option value="{{ $class->id }}"
                        {{ $student->classroom_id == $class->id ? 'selected' : '' }}>
                        {{ $class->kelas }}
                    </option>
                @endforeach
            </select>

            <label class="block mt-3 mb-2">Email</label>
            <input type="email" name="email" class="border p-2 rounded w-full bg-gray-900"
                   value="{{ $student->email }}">

            <label class="block mt-3 mb-2">Alamat</label>
            <textarea name="address" class="border p-2 rounded w-full border p-2 rounded w-full bg-gray-900">{{ $student->address }}</textarea>

            <div class="flex justify-end mt-4">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
