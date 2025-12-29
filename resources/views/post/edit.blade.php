<x-layout :title="$pageTitle">
    <h2>edit post</h2>
    <h1 class="text-2xl">post's Author : {{ $post->author }}</h1>
    <h1 class="text-2xl">post's Title : {{ $post->title }}</h1>
    <h1 class="text-2xl">post's Body : {{ $post->body }}</h1>

</x-layout>
