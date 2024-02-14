<x-layout>
    <h1>
        <span>Hello Laravel!</span>
        <a href="{{ route('create.posts')}}" id="create" class="button">新規追加</a>
        <a href="{{ route('search.posts')}}" id="search" class="button">検索</a>
    </h1>
    <ul>
        @foreach ($posts as  $post)
        <li><a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>
</x-layout>
