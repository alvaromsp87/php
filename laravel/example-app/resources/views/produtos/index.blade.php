<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->produto_id }}</td>
                    <td>{{ $produto->nome_produto }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->categoria->nome_categoria ?? 'Sem categoria' }}</td>
                    <td>{{ $produto->categoria->nome ?? 'Sem categoria' }}</td> <!-- Acessando o relacionamento com a categoria -->
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
