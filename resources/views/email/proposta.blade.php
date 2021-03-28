<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <p>Olá {{ $destinatario->nome }}</p>
        <p>Recebemos sua proposta pelo site PRIME</p>
        <br>
        <p><bold>Ref:</bold> {{$remetente->ref}}</p>
        <p><bold>Nome:</bold> {{$remetente->nome}}</p>
        <p><bold>Telefone:</bold> {{$remetente->telefone}}</p>
        <p><bold>E-mail:</bold> {{$remetente->email}}</p>
        <p><bold>Mensagem:</bold> {{$remetente->mensagem}}</p>
        <br>
        <br>
        <p>Att, <br>
            {{$remetente->username}}</p>
</body>
</html>