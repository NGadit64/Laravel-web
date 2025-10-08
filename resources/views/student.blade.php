<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="mb-4 text-xl font-bold">Daftar Siswa</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-400">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">No</th>
                    <th class="border border-gray-400 px-4 py-2">Nama</th>
                    <th class="border border-gray-400 px-4 py-2">Tanggal Lahir</th>
                    <th class="border border-gray-400 px-4 py-2">Kelas</th>
                    <th class="border border-gray-400 px-4 py-2">Gender</th>
                    <th class="border border-gray-400 px-4 py-2">Email</th>
                    <th class="border border-gray-400 px-4 py-2">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-400 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $student->name }}</td>
                        <td class="border border-gray-400 px-4 py-2">
                            {{ \Carbon\Carbon::parse($student->birthday)->format('d-m-Y') }}
                        </td>
                        <td class="border border-gray-400 px-4 py-2">{{ $student->classroom->kelas }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $student->gender }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $student->email }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $student->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
