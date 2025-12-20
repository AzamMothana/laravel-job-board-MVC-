<x-layout :title="$pageTitle">
    <h1>show</h1>
    <h2 class="text-2xl">{{ $post->title }}</h2>
    <h2>{{ $post->body }}</h2>
    <h2>{{ $post->author }}</h2>
    <h2>{{ $post->published }}</h2>
    
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                {{ $comment->content }}, {{ $comment->author }}
            </li>
        @endforeach
    </ul>
</x-layout>