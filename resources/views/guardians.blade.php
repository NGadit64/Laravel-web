
<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="mb-4 text-xl font-bold">Daftar Orangtua / Wali</h1>

    <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-700 rounded-lg">
    <thead class="bg-gray-800 text-gray-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Pekerjaan</th>
                    <th class="border px-4 py-2">Telepon</th>
                    <th class="border px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guardians as $guardian)
                <tr class="hover:bg-blue-700 hover:text-white transition duration-200">
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $guardian->name }}</td>
                        <td class="border px-4 py-2">{{ $guardian->job }}</td>
                        <td class="border px-4 py-2">{{ $guardian->phone }}</td>
                        <td class="border px-4 py-2">{{ $guardian->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layout>
