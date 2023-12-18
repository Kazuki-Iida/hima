<x-app-layout>
    <div class="w-[80%] m-auto">
        
    <h1 class="mt-10">hima blog</h1>
    <a href="posts/create" class="p-[5px] rounded-[8px] bg-gray-600 mt-5 block w-[60px]">create</a>
        <div class='grid grid-cols-3 mt-10 gap-10'>
            @foreach ($posts as $post)
                <a class="p-5 rounded-[15px] border border-gray-400 block"href={{"/posts/".$post->id}}>
                    <div class='post'>
                        <h2 class='title font-bold text-white'>{{ $post->title }}</h2>
                        <p class='body font-bold text-white mt-1' >{{ $post->body }}</p>
                    </div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-[8px] bg-gray-600 p-[5px] mt-1"type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </a>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
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