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
    @if(session('msg'))
    <script>
        alert("{{ session('msg') }}");
    </script>
    @endif
    @yield('content')
</body>
</html>
