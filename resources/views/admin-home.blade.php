@extends('layouts.admin')

@section('content')
<div class="admin-home">
    <a href="#">Novo Item</a>
    <ul class="post-list">
        <li>
            <div class="post-title">
                <h2>Titulo</h2>
                <button><img src="#" alt="edit"></button>
                <button><img src="#" alt="excluir"></button>
            </div>
            <br />
            <img src="#" alt="image">
            <p>Esta API tem como objetivo realizar as interações necessárias com um banco de dados PostgreSQL, sendo capaz de criar registros de Alunos e de Endereços, estes últimos associados aos alunos. Nesse projeto foi utilizada a arquitetura no modelo REST, e ainda a implementação do modelo GraphQL, mantendo o modelo REST, ou seja, sendo capaz de utilizar os dois modelos para interagir com o Banco.

Como framework para estrutura da API foi utilizado o NestJS, utilizado para construção de aplicações backend eficientes e escaláveis. Como linguagem, foi utilizado o Typescript aplicando elementos de programação funcional. Para implementação do projeto também foi criada uma image Docker (imagem que empacota a aplicação) e também um arquivo do Docker Compose com o qual se pode levantar a aplicação junto com seu banco de dados de uma só vez, de maneira prática.</p>
            <p>Github: link</p>
        </li>
    </ul>
</div>
@endsection
