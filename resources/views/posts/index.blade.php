<x-app-layout>
    <h1>kaitokosuge★</h1>
        <div class='grid grid-cols-3'>
            <div class="p-5 rounded-[15px] border border-gray-400">
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title font-bold text-white'>{{ $post->title }}</h2>
                    <p class='body font-bold text-white'>{{ $post->body }}</p>
                </div>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="rounded-[8px] bg-gray-600 p-[5px]"type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            @endforeach
            </div>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            'use strict'
            function deletePost(id) {
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>