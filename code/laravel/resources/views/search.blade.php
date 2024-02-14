<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
       <h1>検索画面</h1>
       <form action="{{route('search.posts')}}" method="get">
        @csrf
         <label>
            Title検索
            <input type="text" name="title" placeholder="">
            <div class="btn"><button>検索</button></div>
         </label>
        </form>

        <h3>検索結果</h3>
        @if(isset($posts) && $title)
    @foreach ($posts as  $post)
    <li><a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
    </li>
    @endforeach
@endif
</x-layout>
