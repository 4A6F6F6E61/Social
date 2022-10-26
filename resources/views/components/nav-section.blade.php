@props(['name'])

<li class="px-5">
    <div class="flex flex-row items-center h-8">
        <div class="text-sm font-light tracking-wide text-gray-500"> {{ $name }} </div>
    </div>
    {{ $slot }}
</li>
