@props(['post'])

<?php
use \App\Models\User;
$user = User::query()->where('name', "=", $post->author)->first();
?>

@if ($user ?? false)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-12 mr-6 md:block"
            src="{{$user->img}}"
            alt=""
        />
        <h3 class="font-bold">
            {{$user->fullname}}
        </h3>
        {{$user->name}}
        {{$post->upvotes - $post->downvotes}}
    </div>
</div>
@endif
