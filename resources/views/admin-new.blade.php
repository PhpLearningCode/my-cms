@extends('layouts.admin')

@section('content')
<div class="admin-new">
    <h2 class="title">Novo Item</h2>
    <form action="#" method="post">
        <label for="title">Título</label>
        <input type="text" name="title" id="title">

        <p>Categoria:</p>
        <input type="radio" name="category" id="web" value="Web">
        <label for="web">Web</label>
        <input type="radio" name="category" id="mobile" value="Mobile">
        <label for="web">Mobile</label>
        <input type="radio" name="category" id="desktop" value="desktop">
        <label for="desktop">Desktop</label>

        <label for="github">Github</label>
        <input type="text" name="github" id="github">

        <label for="img">Imagem cropada:</label>
        <input type="file" id="img" name="img" accept="image/*">

        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</div>
@endsection
