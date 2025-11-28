<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-xl">

            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6 border border-gray-200 dark:border-gray-700">

                <h1 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">
                    Edit Guru
                </h1>

                <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- NAMA -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Nama Guru</label>
                        <input type="text" name="nam"
                               class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600
                                      text-gray-900 dark:text-gray-200 rounded-lg w-full p-2
                                      focus:ring-blue-500 focus:border-blue-500"
                               value="{{ $teacher->nam }}" required>
                    </div>

                    <!-- MAPEL -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Mata Pelajaran</label>
                        <select name="subject_id"
                                class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600
                                       text-gray-900 dark:text-gray-200 rounded-lg w-full p-2
                                       focus:ring-blue-500 focus:border-blue-500"
                                required>
                            @foreach($subject as $sub)
                                <option value="{{ $sub->id }}"
                                    {{ $teacher->subject_id == $sub->id ? 'selected' : '' }}>
                                    {{ $sub->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- PHONE -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Phone</label>
                        <input type="text" name="phone"
                               class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600
                                      text-gray-900 dark:text-gray-200 rounded-lg w-full p-2
                                      focus:ring-blue-500 focus:border-blue-500"
                               value="{{ $teacher->phone }}">
                    </div>

                    <!-- EMAIL -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Email</label>
                        <input type="email" name="email"
                               class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600
                                      text-gray-900 dark:text-gray-200 rounded-lg w-full p-2
                                      focus:ring-blue-500 focus:border-blue-500"
                               value="{{ $teacher->email }}">
                    </div>

                    <!-- ADDRESS -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Address</label>
                        <textarea name="address"
                                  class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600
                                         text-gray-900 dark:text-gray-200 rounded-lg w-full p-2
                                         focus:ring-blue-500 focus:border-blue-500">{{ $teacher->address }}</textarea>
                    </div>

                    <button class="bg-blue-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg">
                        Update
                    </button>

                </form>

            </div>
        </div>
    </section>

</x-admin.layout>
