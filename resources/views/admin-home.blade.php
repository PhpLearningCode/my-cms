@extends('layouts.admin')

@section('content')
<div class="admin-home">
    <a href="{{route('admin-new')}}" id="new-post">Novo Item</a>

    <ul class="post-list">
        @foreach ($posts as $post)
        <li>
            <div class="post-title">
                <h2>{{$post->title}}</h2>
                <div class="sub-title">
                    <div class="category">{{$post->category}}</div>
                    <button ><a href="{{route('admin-new', ['id' => $post->id])}}"><img src="{{asset('images/edit.png')}}" alt="edit"></a></button>
                    <button ><a href="{{route('delete-post', ['id' => $post->id])}}"><img src="{{asset('images/delete.png')}}" alt="excluir"></a></button>
                </div>
            </div>
            <br />
            <img src="{{$post->image}}" alt="image">
            <p>{{$post->description}}</p>
            <p>Github: <a href="{{$post->github}}">{{$post->github}}</a></p>
        </li>
        @endforeach

    </ul>
</div>
@endsection
