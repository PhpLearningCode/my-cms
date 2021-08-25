@extends('layouts.site')

@section('content')
<div class="portfolio">
    <h1 class="portfolio-title">Portfolio</h1>
    <ul class="post-list">
        @foreach ($posts as $post)
        <li>
            <div class="post-title">
                <h2>{{$post->title}}</h2>
                <div class="category">{{$post->category}}</div>
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
