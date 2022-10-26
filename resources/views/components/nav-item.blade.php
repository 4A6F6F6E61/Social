@props(['link', 'name', 'path'])
<li>
    <a href="{{$link}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-laravel pr-6">
        <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                @isset($path)
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$path}}"></path>
                {{ $slot }}
                @endif
            </svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">{{$name}}</span>
    </a>
</li>
