<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="mb-4 text-xl font-bold">Daftar Kelas</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-400">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Subject</th>
                    <th class="border px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subject as $subject)
                    <tr class="hover:bg-gray-100">
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $subject->nama }}</td>
                        <td class="border px-4 py-2">{{ $subject->description }}</td>
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
