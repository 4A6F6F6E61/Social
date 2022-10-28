@props(['name'])

<li class="lg:px-5 w-full">
    <div class="flex flex-row items-center h-8 w-full">
        <div class="text-sm font-light tracking-wide text-gray-500 w-full text-center lg:text-left dark:text-gray-400"> {{ $name }} </div>
    </div>
    {{ $slot }}
</li>
