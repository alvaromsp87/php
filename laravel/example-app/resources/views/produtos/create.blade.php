<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Novo Produto</title>
</head>
<body>
    <h1>Adicionar Novo Produto</h1>
    <form action="{{ url('/novo-produto') }}" method="GET">
        <label for="produto">Nome do Produto:</label>
        <input type="text" id="produto" name="produto" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br>

        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" required><br>

        <label for="categoria_id">ID da Categoria:</label>
        <input type="number" id="categoria_id" name="categoria_id" required><br>

        <button type="submit">Adicionar Produto</button>
    </form>
</body>
</html>
