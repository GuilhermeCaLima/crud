<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes no sistema</title>
</head>
<body>
    <table>
        <tr><th>Nome</th><th>E-mail</th><th>CPF</th></tr>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->cpf}}</td>
            <td><a href="{{route('editar_cliente', ['id' =>$cliente->id])}}"
                title="Editar Cliente{{ $cliente->nome}}">Editar</a></td>
            <td><a href="{{ route('excluir_cliente', ['id' =>$cliente->id])}}"
                title="Exclir Cliente {{ $cliente->nome}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>