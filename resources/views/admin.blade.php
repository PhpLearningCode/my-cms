<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>William Souza - Admin</title>
</head>
<body>
    <div class="login-box">
        @if(session('msg'))
        <div class="alert alert-danger alert-dismissible" style="width:100% !important">
            <button type=" button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class=" msg icon fas fa-ban"></i> Atenção!</h5>
            {{ session('msg') }}
        </div>
        <div class="msg bg-danger " style="color:seashell"><span></span></div>
        @endif

        <form action="{{route('login')}}" method="POST">
            @csrf
            <p class="login-title">William Souza - backend</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" />
            <label for="password">Senha</label>
            <input type="password" name="password" />
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
