@props(['post'])

@php
    use \App\Models\User;
    $user = User::query()->where('name', "=", $post->author)->first();
@endphp

@if ($user ?? false)
<div class="bg-white w-full mx-auto p-5 text-gray-800 shadow hover:bg-gray-50 border-transparent hover:border-laravel focus:outline-none border-l-4 dark:bg-cardbg dark:hover:bg-cardhoverbg dark:text-gray-300" style="max-width: 600px">
    <div class="w-full flex mb-4">
        <div class="overflow-hidden rounded-full w-12 h-12">
            <img
                src="{{$user->img}}"
                alt=""
            />
        </div>
        <div class="flex-grow pl-3">
            <h6 class="font-bold text-md">{{$user->fullname}}</h6>
            <p class="text-xs text-gray-600">{{'@' . $user->name}}</p>
        </div>

    </div>
    <div class="w-full mb-4">
        <p class="text-sm">
            {{$post->content}}
        </p>
    </div>
    <div class="w-full">
        <p class="text-xs text-gray-500 text-right">{{$post->created_at->diffForHumans()}}</p>
    </div>
</div>
@endif

