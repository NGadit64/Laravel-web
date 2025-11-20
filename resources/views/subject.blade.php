<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="mb-4 text-xl font-bold text-white">Daftar Kelas</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-700 rounded-lg">
            <thead class="bg-gray-800 text-gray-100">
                <tr>
                    <th class="border border-gray-700 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-700 px-4 py-2 text-left">Subject</th>
                    <th class="border border-gray-700 px-4 py-2 text-left">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subject as $subject)
                    <tr class="hover:bg-blue-700 hover:text-white transition duration-200">
                        <td class="border border-gray-700 px-4 py-2 text-gray-300">{{ $loop->iteration }}</td>
                        <td class="border border-gray-700 px-4 py-2 text-gray-200">{{ $subject->nama }}</td>
                        <td class="border border-gray-700 px-4 py-2 text-gray-400">{{ $subject->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
