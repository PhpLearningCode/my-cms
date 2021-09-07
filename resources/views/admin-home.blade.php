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
                    <button ><a href="{{route('update-post', ['post' => $post])}}"><img src="{{asset('images/edit.png')}}" alt="edit"></a></button>
                    <button ><a href="{{route('delete-post', ['id' => $post->id])}}"><img src="{{asset('images/delete.png')}}" alt="excluir"></a></button>
                </div>
            </div>
            <br />
            <img src="{{$post->image}}" alt="image">
            <p>{{$post->description}}</p>
            <p>Github: <a href="{{$post->github}}">{{$post->github}}</a></p>
        </li>
        @endforeach


        <li>
            <div class="post-title">
                <h2>API Endereços e Alunos</h2>
                <div class="sub-title">
                    <div class="category">Web</div>
                    <button ><img src="{{asset('images/edit.png')}}" alt="edit"></button>
                    <button ><img src="{{asset('images/delete.png')}}" alt="excluir"></button>
                </div>
            </div>
            <br />
            <img src="{{asset('images/dummy.jpg')}}" alt="image">
            <p>Esta API tem como objetivo realizar as interações necessárias com um banco de dados PostgreSQL, sendo capaz de criar registros de Alunos e de Endereços, estes últimos associados aos alunos. Nesse projeto foi utilizada a arquitetura no modelo REST, e ainda a implementação do modelo GraphQL, mantendo o modelo REST, ou seja, sendo capaz de utilizar os dois modelos para interagir com o Banco.

Como framework para estrutura da API foi utilizado o NestJS, utilizado para construção de aplicações backend eficientes e escaláveis. Como linguagem, foi utilizado o Typescript aplicando elementos de programação funcional. Para implementação do projeto também foi criada uma image Docker (imagem que empacota a aplicação) e também um arquivo do Docker Compose com o qual se pode levantar a aplicação junto com seu banco de dados de uma só vez, de maneira prática.</p>
            <p>Github: <a href="https://github.com/williamguilhermesouza/enderecosAlunosAPI">https://github.com/williamguilhermesouza/enderecosAlunosAPI</a></p>
        </li>

        <li>
            <div class="post-title">
                <h2>API Endereços e Alunos</h2>
                <div class="sub-title">
                    <div class="category">Web</div>
                    <button ><img src="{{asset('images/edit.png')}}" alt="edit"></button>
                    <button ><img src="{{asset('images/delete.png')}}" alt="excluir"></button>
                </div>
            </div>
            <br />
            <img src="{{asset('images/dummy.jpg')}}" alt="image">
            <p>Esta API tem como objetivo realizar as interações necessárias com um banco de dados PostgreSQL, sendo capaz de criar registros de Alunos e de Endereços, estes últimos associados aos alunos. Nesse projeto foi utilizada a arquitetura no modelo REST, e ainda a implementação do modelo GraphQL, mantendo o modelo REST, ou seja, sendo capaz de utilizar os dois modelos para interagir com o Banco.

Como framework para estrutura da API foi utilizado o NestJS, utilizado para construção de aplicações backend eficientes e escaláveis. Como linguagem, foi utilizado o Typescript aplicando elementos de programação funcional. Para implementação do projeto também foi criada uma image Docker (imagem que empacota a aplicação) e também um arquivo do Docker Compose com o qual se pode levantar a aplicação junto com seu banco de dados de uma só vez, de maneira prática.</p>
            <p>Github: <a href="https://github.com/williamguilhermesouza/enderecosAlunosAPI">https://github.com/williamguilhermesouza/enderecosAlunosAPI</a></p>
        </li>
    </ul>
</div>
@endsection
