<x-layout :title="$pageTitle">
    <h2>edit Comment</h2>
    <h1 class="text-2xl">Comment's Author : {{ $comment->author }}</h1>
    <h1 class="text-2xl">Comment's Content : {{ $comment->content }}</h1>
</x-layout>
