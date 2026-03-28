<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>

<section class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    
<div class="w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-800 p-8">

<a href="/home"
   class="inline-flex items-center mb-4 text-sm font-medium
          text-gray-600 hover:text-blue-600
          dark:text-gray-400 dark:hover:text-white">
    ← Back to Home
</a>

    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">
        Sign in
    </h1>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-500">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">
                Email
            </label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full rounded-lg border border-gray-300 p-2.5
                       focus:ring-blue-500 focus:border-blue-500
                       dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required>
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">
                Password
            </label>
            <input type="password" name="password"
                class="w-full rounded-lg border border-gray-300 p-2.5
                       focus:ring-blue-500 focus:border-blue-500
                       dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required>
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="remember" class="mr-2">
            <span class="text-sm text-gray-600 dark:text-gray-400">
                Remember me
            </span>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white
                   font-medium rounded-lg py-2.5">
            Sign in
        </button>
    </form>

  </div>
</section>

</body>
</html>
