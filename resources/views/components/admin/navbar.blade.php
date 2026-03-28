<nav class="bg-gray-800 border-b border-gray-700 px-4 py-3 flex items-center justify-between">
    <!-- Search -->
    <div class="flex items-center w-full max-w-lg">
        <input type="text" placeholder="Search"
               class="w-full px-3 py-2 rounded-lg bg-gray-700 text-gray-200 border border-gray-600 focus:ring focus:ring-blue-500">
    </div>

    <!-- Right side -->
    <div class="flex items-center space-x-4">

        <!-- Bell -->
        <button class="text-gray-400 hover:text-gray-100">
            <i class="fa-regular fa-bell"></i>
        </button>

        @auth
            <!-- Avatar -->
            <img
                class="w-8 h-8 rounded-full border border-gray-600"
                src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? auth()->user()->email) }}"
                alt="avatar"
            />

            <!-- Email -->
            <span class="text-gray-300 text-sm hidden md:block">
                {{ auth()->user()->email }}
            </span>

            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="text-red-400 hover:text-red-300 text-sm font-medium">
                    Logout
                </button>
            </form>
        @endauth

    </div>
</nav>
