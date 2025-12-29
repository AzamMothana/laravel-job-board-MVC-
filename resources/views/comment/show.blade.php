<x-layout :title="$pageTitle">
    <h1>show Comment</h1>
    <h2 class="text-2xl">Comment by {{ $comment->author }}</h2>
    <h2>{{ $comment->content }}</h2>
    @if ($comment->post)    
        <h3>Related Post</h3>
        <ul>
            <li>
                <Strong>{{ $comment->post->title }}</Strong>
                <p>{{ $comment->post->body }}</p>
                <p>Author: {{ $comment->post->author }}</p>
                <a href="{{ route('blog.show', $comment->post->id) }}" style="color: blue,">View Full post</a>
            </li>
        </ul>
    @else
        <p>No Related post for this Comment</p>
    @endif
    
</x-layout>




