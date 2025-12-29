<x-layout :title="$pageTitle">
    <h2>Tag: {{ $tag->title }} </h2>
    <h3>Rlated Posts</h3>
    <ul>
        @forelse ($tag->posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->body }}</p>
                <p>Author: {{ $post->author }}</p>
                <a href=" {{ route('blog.show' , $post->id) }} " >View Full Post</a>
            </li>
        @empty
            <p>No Posts Are Related With The Tag Yet</p>
        @endforelse
    </ul>
    
    
    {{-- <h2 class="text-2xl">{{ $tag->title }}</h2>
    <ul>
        @foreach ($tag->posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
        </li>
        @endforeach
    </ul> --}}

</x-layout>