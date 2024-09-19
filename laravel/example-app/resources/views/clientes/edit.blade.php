<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Cliente</title>
</head>
<body>
    <h1>Atualizar Cliente</h1>
    <form action="{{ url('/atualizar-cliente/' . $cliente->cliente_id) }}" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $cliente->nome_cliente }}" required><br>

        <button type="submit">Atualizar Cliente</button>
    </form>
</body>
</html>
