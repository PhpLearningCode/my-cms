@extends('layouts.site')

@section('content')
<div class="banner">
    <p class="title">William Souza</p>
    <p>Desenvolvedor Fullstack</p>
    <a href="#profile"><img src="{{asset('images/arrow-down.png')}}" alt="arrow-down"></a>
</div>
<section class="profile" id="profile">
    <p class="profile-title">Quem sou</p>
    <div class="profile-subsec">
        <img class="profile-pic" src="{{asset('images/profile-pic.jpg')}}" />
        <p class="profile-description">Desenvolvedor Fullstack, apaixonado pela área de desenvolvimento e envolvido no estudo de tecnologia e área de TI desde 2003. Atualmente trabalhando na área de desenvolvimento, especializado na idealização, design, prototipagem e implementação de sistemas web, desde o frontend até o backend e infraestrutura envolvida. Atuo buscando prover todos os elementos necessários para as soluções de TI idealizadas pelos clientes, com o fim de atender todos os requisitos levantados e idealização da interface com maior fidelidade possivel.</p>
    </div>
    </section>
@endsection
