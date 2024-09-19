<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
    <title>Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Numero Pedidio</th>
                <th>Nome cliente</th>
                <th>Vendedor</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pedidos as $pedido)
            

            <tr>
                <td>{{$pedido->pedido_id }}</td>
                <td>{{ $pedido->cliente->	cliente_id ?? 'Cliente não encontrado'}}</td>
                <td>{{ $pedido->vendedor->vendedor_id ?? 'Vendedor não encontrado' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>    
</body>
</html>
