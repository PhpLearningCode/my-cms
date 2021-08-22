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
            <img src="{{asset('images/whatsapp.png')}}" alt="zap" />
            <p>+55 21 981008743</p>
        </div>
        <div class="link-item">
            <img src="{{asset('images/home.png')}}" alt="end" />
            <p>Rodovia Amaral Peixoto, km 80</p>
        </div>
        <div class="link-item">
            <img src="{{asset('images/gmail.png')}}" alt="email" />
            <p>williamguilhermesouza@gmail.com</p>
        </div>
        <div class="link-item">
            <img src="{{asset('images/github.png')}}" alt="github" />
            <a href="https://github.com/williamguilhermesouza">https://github.com/williamguilhermesouza</a>
        </div>
        <div class="link-item">
            <img src="{{asset('images/linkedin.png')}}" alt="linkedin" />
            <a href="https://www.linkedin.com/in/william-guilherme-45540a171">https://www.linkedin.com/in/william-guilherme-45540a171</a>
        </div>
    </div>
</section>
@endsection
