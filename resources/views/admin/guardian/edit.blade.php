<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mt-6">

        <h2 class="text-xl font-bold mb-4">Edit Wali</h2>

        <form action="{{ route('admin.guardian.update', $guardian->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input type="text" name="name" value="{{ $guardian->name }}"
                class="w-full p-2 rounded-lg border bg-gray-100 dark:bg-gray-700 dark:text-white"
                required>
            </div>

            <!-- Job -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Pekerjaan</label>
                <input type="text" name="job" value="{{ $guardian->job }}"
                class="w-full p-2 rounded-lg border bg-gray-100 dark:bg-gray-700 dark:text-white"
                required>
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Telepon</label>
                <input type="text" name="phone" value="{{ $guardian->phone }}"
                class="w-full p-2 rounded-lg border bg-gray-100 dark:bg-gray-700 dark:text-white"
                required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ $guardian->email }}"
                class="w-full p-2 rounded-lg border bg-gray-100 dark:bg-gray-700 dark:text-white"
                required>
            </div>

            <!-- SUBMIT -->
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                Update
            </button>

        </form>

    </div>

</x-admin.layout>
