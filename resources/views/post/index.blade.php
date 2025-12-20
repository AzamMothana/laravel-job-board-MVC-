<x-layout :title="$pageTitle">
    <h2>Blog</h2>

    @foreach ($posts as $post)
        <h1 class="text-2xl">{{$post->title}}</h1>
        <h5 class="text-1xl">{{$post->body}}</h5>
        <h5>{{$post->author}}</h5>
    @endforeach

    {{ $posts->links() }}




</x-layout>
