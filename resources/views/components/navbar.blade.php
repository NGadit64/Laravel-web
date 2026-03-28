<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <x-nav-link href="/home"
              :active="request()->is('home')"
              >home</x-nav-link>
              <x-nav-link href="/kontak"
              :active="request()->is('kontak')"
              >kontak</x-nav-link>
              <x-nav-link href="/profil"
              :active="request()->is('profil')"
              >profil</x-nav-link>
              <x-nav-link href="/student"
              :active="request()->is('student')"
              >student</x-nav-link>
              <x-nav-link href="/guardians"
              :active="request()->is('guardians')"
              >guardians</x-nav-link>
              <x-nav-link href="/classroom"
              :active="request()->is('classroom')"
              >classroom</x-nav-link>
              <x-nav-link href="/teacher"
              :active="request()->is('teacher')"
              >teacher</x-nav-link>
              <x-nav-link href="/subject"
              :active="request()->is('subject')"
              >subject</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <!-- Profile dropdown -->
<!-- PROFILE / AUTH -->
@auth
  <x-nav-link 
    href="{{ route('admin.dashboard') }}"
    :active="request()->is('admin/dashboard')"
  >
    Admin Dashboard
  </x-nav-link>
@endauth

<div class="flex items-center space-x-4">
  @auth
    <img
      class="w-8 h-8 rounded-full border border-gray-600"
      src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? auth()->user()->email) }}"
      alt="avatar"
    />

    <span class="text-gray-300 text-sm">
      {{ auth()->user()->email }}
    </span>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button class="text-red-400 hover:text-red-300 text-sm">
        Logout
      </button>
    </form>
  @endauth

  @guest
    <a href="{{ route('login') }}"
       class="text-gray-300 hover:text-white text-sm">
      Login
    </a>
  @endguest
</div>

          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <x-nav-link-mobile href="/home" :active="request()->is('home')">Home</x-nav-link-mobile>
        <x-nav-link-mobile href="/profil" :active="request()->is('profil')">Profil</x-nav-link-mobile>
        <x-nav-link-mobile href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link-mobile>
        <x-nav-link-mobile href="/student" :active="request()->is('index')">Student</x-nav-link-mobile>
        <x-nav-link-mobile href="/guardians" :active="request()->is('guardians')">guardians</x-nav-link-mobile>
        <x-nav-link-mobile href="/classroom" :active="request()->is('clasroom')">classroom</x-nav-link-mobile>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>
</div>