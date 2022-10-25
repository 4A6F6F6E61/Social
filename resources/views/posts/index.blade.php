<x-layout>
    <div
        class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    @foreach($posts as $post)
        <x-postcard :post="$post"/>
    @endforeach
</x-layout>