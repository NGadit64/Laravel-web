@props(['icon' => '', 'text' => '', 'href' => '#', 'active' => false])

<a href="{{ $href }}"
   class="flex items-center px-3 py-2 rounded-lg text-sm font-medium transition-colors
   {{ $active ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
    <i class="{{ $icon }} w-5 text-center"></i>
    <span class="ml-3">{{ $text }}</span>
</a>

<!--  -->