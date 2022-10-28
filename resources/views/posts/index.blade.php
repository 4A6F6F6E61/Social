<x-layout>
    <div
        class="lg:grid lg:grid-cols-1 space-y-4 mx-4 pt-3 w-full ml-20 lg:ml-60"
    >
    @foreach($posts as $post)
        <x-postcard :post="$post"/>
    @endforeach
    <div class="mt-6 p-4 m-auto w-full" style="max-width: 600px;">
        {{$posts->links()}}
    </div>
    </div>
</x-layout>
