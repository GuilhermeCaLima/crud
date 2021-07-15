<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar novo cliente</title>
</head>
<body>
    <form action=" {{ route('atualizar_cliente', ['id' =>$cliente->id])}} " method="post">
        @csrf
        <div><label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$cliente->nome}}">
        </div>
        <div><label for="email">E-mail</label>
        <input type="email" name="email" value="{{$cliente->email}}">
        </div>
        <div><label for="cpf">CPF</label>
        <input type="text" name="cpf" value="{{$cliente->cpf}}">
        </div>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>