
<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="mb-4 text-xl font-bold">List of Teacher</h1>

    <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-700 rounded-lg">
    <thead class="bg-gray-800 text-gray-100">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">No</th>
                    <th class="border border-gray-400 px-4 py-2">Name</th>
                    <th class="border border-gray-400 px-4 py-2">Subject Name</th>
                    <th class="border border-gray-400 px-4 py-2">Phone</th>
                    <th class="border border-gray-400 px-4 py-2">Email</th>
                    <th class="border border-gray-400 px-4 py-2">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacher as $teachers)
                <tr class="hover:bg-blue-700 hover:text-white transition duration-200">
                        <td class="border border-gray-400 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $teachers->nam }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $teachers->subject->nama }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $teachers->phone }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $teachers->email }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $teachers->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layout>
