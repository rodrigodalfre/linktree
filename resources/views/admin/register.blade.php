<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkTree - Cadastro</title>

    <link rel="stylesheet" href="{{url('assets/css/admin.login.css')}}">
</head>
<body>
    
    <div class="loginArea">
        <h1>Registro</h1>

        @if ($error) 
            <div class="error">{{$error}}</div>
        @endif

        <form method="POST">
            @csrf
            <input type="email" name="email" placeholder="Digite seu email">
            
            <input type="password" name="password" placeholder="Digite sua senha">
 
            <input type="submit" value="Cadastrar">


            Já possui cadastro? <a href="{{url('/admin/login')}}">Faça login</a>
        </form>
    </div>

</body>
</html>