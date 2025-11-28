<aside class="w-64 bg-gray-800 border-r border-gray-700 min-h-screen">
    <div class="flex items-center px-4 py-4 border-b border-gray-700">
        <span class="text-xl font-semibold">Admin Panel</span>
    </div>

    <nav class="p-4 space-y-2">
        <x-admin.sidelink 
            href="/dashboard"
            icon="fa-solid fa-house"
            text="Dashboard"
            :active="request()->is('dashboard')"
        />

        <x-admin.sidelink 
    href="{{ route('admin.student.index') }}" 
    icon="fa-solid fa-users" 
    text="Data Siswa" 
    :active="request()->is('admin/student*')" />

        <x-admin.sidelink 
            href="{{ route('admin.classroom.index') }}"
            icon="fa-solid fa-school"
            text="Data Kelas"
            :active="request()->is('admin/classroom*')"
        />

        <x-admin.sidelink 
            href="{{ route('admin.teacher.index')}}"
            icon="fa-solid fa-user-tie"
            text="Data Guru"
            :active="request()->is('admin/teacher*')"
        />

        <x-admin.sidelink 
            href="{{ route('admin.subject.index')}}"
            icon="fa-solid fa-book"
            text="Mata Pelajaran"
            :active="request()->is('admin/subject*')"
        />

        <x-admin.sidelink 
            href="{{ route('admin.guardian.index')}}"
            icon="fa-solid fa-book"
            text="Guardian"
            :active="request()->is('admin/guardian*')"
        />

        <x-admin.sidelink 
            href="/"
            icon="fa-solid fa-right-from-bracket"
            text="Logout"
        />
    </nav>
</aside>
<!--  -->