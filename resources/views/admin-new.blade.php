@extends('layouts.admin')

@section('content')
<div class="admin-new">


    <h2 class="title">Novo Item</h2>
    <form
        @if($post[0])
        action="{{route('update-post')}}"
        @else
        action="{{route('new-post')}}"
        @endif
    method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title"
        @if($post)
        value="{{$post[0]->title}}"
        @endif
        >

        <div class="category">
            <p>Categoria:</p>
            <input type="radio" name="category" id="web" value="Web"{{$post[0]->category == 'Web'? "checked": "" }}>
            <label for="web">Web</label>
            <input type="radio" name="category" id="mobile" value="Mobile" {{$post[0]->category == 'Mobile'? "checked": "" }}>
            <label for="web">Mobile</label>
            <input type="radio" name="category" id="desktop" value="desktop" {{$post[0]->category == 'Desktop'? "checked": "" }}>
            <label for="desktop">Desktop</label>
        </div>

        <label for="github">Github</label>
        <input type="text" name="github" id="github"
        @if($post)
        value="{{$post[0]->github}}"
        @endif
        >

        <label for="img">Imagem cropada:</label>
        <input type="file" id="img" name="img" accept="image/*">

        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10">
        @if($post)
        {{$post[0]->description}}
        @endif
        </textarea>

        <div class="buttons">
            <input type="submit" value="Salvar" id="salvar" name="submit">
            <button type="reset">Limpar</button>
        </div>

    </form>
</div>
@endsection
