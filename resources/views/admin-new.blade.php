@extends('layouts.admin')

@section('content')
<div class="admin-new">

    <h2 class="title">Novo Item</h2>
    <form action="{{route('new-post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title">

        <div class="category">
            <p>Categoria:</p>
            <input type="radio" name="category" id="web" value="Web">
            <label for="web">Web</label>
            <input type="radio" name="category" id="mobile" value="Mobile">
            <label for="web">Mobile</label>
            <input type="radio" name="category" id="desktop" value="desktop">
            <label for="desktop">Desktop</label>
        </div>

        <label for="github">Github</label>
        <input type="text" name="github" id="github">

        <label for="img">Imagem cropada:</label>
        <input type="file" id="img" name="img" accept="image/*">

        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <div class="buttons">
            <input type="submit" value="Salvar" id="salvar" name="submit">
            <button type="reset">Limpar</button>
        </div>

    </form>
</div>
@endsection
