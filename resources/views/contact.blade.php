@extends('layouts.site')

@section('content')
<section class="contact">
    <div class="message">
        <p>Envie sua mensagem, entre em contato!!!</p>
        <form class="contact-form" action="{{route('email')}}" method="post">
            @csrf
            <div class="field">
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" />
            </div>
            <div class="field">
                <label for="email">E-mail</label><br>
                <input type="text" id="email" />
            </div>
            <div>
                <label for="mensagem">Mensagem</label><br>
                <textarea id="mensagem"></textarea>
            </div>
            <button type="submit">Enviar Mensagem</button>
        </form>
    </div>
    <div class="links">
        <div class="link-item">
            <img src="#" alt="zap" />
            <p>+55 21 981008743</p>
        </div>
        <div class="link-item">
            <img src="#" alt="end" />
            <p>Rodovia Amaral Peixoto, km 80</p>
        </div>
        <div class="link-item">
            <img src="#" alt="email" />
            <p>williamguilhermesouza@gmail.com</p>
        </div>
        <div class="link-item">
            <img src="#" alt="github" />
            <p>https://github.com/williamguilhermesouza</p>
        </div>
        <div class="link-item">
            <img src="#" alt="linkedin" />
            <p>https://www.linkedin.com/in/william-guilherme-45540a171</p>
        </div>
    </div>
</section>
@endsection
