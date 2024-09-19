<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo ao Sistema de Gestão</h1>
    
    <nav>
        <ul>
            <!-- Link para listar produtos -->
            <li><a href="{{ url('/produtos') }}">Listar Produtos</a></li>

            <!-- Link para exibir pedidos com cliente e vendedor -->
            <li><a href="{{ url('/pedido') }}">Exibir Pedidos</a></li>

            <!-- Link para exibir o formulário de criação de um novo produto -->
            <li><a href="{{ url('/novoproduto') }}">Adicionar Novo Produto</a></li>

            <!-- Link para atualizar um cliente. Neste caso, você precisaria fornecer um ID dinâmico -->
            <!-- Exemplo com ID 1, pode ser alterado dinamicamente conforme necessário -->
            <li><a href="{{ url('/atualizar-cliente/1') }}">Atualizar Cliente (ID: 1)</a></li>

            <!-- Link para deletar um fornecedor. Aqui também, um ID dinâmico deve ser fornecido -->
            <!-- Exemplo com ID 1, pode ser alterado conforme necessário -->
            <li><a href="{{ url('/deletar-fornecedor/1') }}">Deletar Fornecedor (ID: 1)</a></li>
        </ul>
    </nav>
</body>
</html>
