<?php
// Importa classes e facades necessárias para o funcionamento das rotas
use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProdutoController;
use App\Models\Fornecedores;

// Rota inicial (homepage)
Route::get('/', function () {
    return view('welcome');
});

// Rota para listar produtos utilizando o controlador ProdutoController e o método index
Route::get('/produtos', [ProdutoController::class, 'index']);

// Rota para exibir pedidos, junto com o cliente e vendedor associados
Route::get('/pedido', function () {
    // Busca todos os pedidos junto com as relações de cliente e vendedor
    $pedidos = Pedido::with(['cliente', 'vendedor'])->get();

    // Itera sobre cada pedido e exibe seus detalhes, incluindo o cliente e vendedor
    foreach ($pedidos as $pedido) {
        echo 'Pedido : ' . $pedido->pedido_id . '<br>';
        echo 'Cliente : ' . ($pedido->cliente->nome_clientecliente ?? 'Cliente não encontrado') . '<br>';
        echo 'Vendedor : ' . ($pedido->vendedor->nome_vendedor ?? 'Vendedor não encontrado') . '<br>';
        echo '<hr>';
    }
});

// Rota para exibir o formulário de criação de um novo produto
Route::get('/novoproduto', function () {
    return view('produtos.create');  // Retorna a view 'produtos.create' que contém o formulário para adicionar um novo produto
});

// Rota para atualizar as informações de um cliente
Route::get('/atualizar-cliente/{id}', function ($id) {
    $cliente = Cliente::find($id);  // Busca o cliente pelo ID fornecido na URL
    if ($cliente) {
        $cliente->nome_cliente = 'Nome atualizado';  // Atualiza o nome do cliente
        $cliente->save();  // Salva as alterações no banco de dados
        return 'Cliente atualizado com sucesso!';  // Retorna uma mensagem de sucesso
    } else {
        return 'Cliente não encontrado';  // Retorna uma mensagem de erro caso o cliente não seja encontrado
    }
});

// Rota para deletar um fornecedor
Route::get('/deletar-fornecedor/{id}', function ($id) {
    $fornecedor = Fornecedores::find($id);  // Busca o fornecedor pelo ID fornecido na URL
    if ($fornecedor) {
        $fornecedor->delete();  // Deleta o fornecedor do banco de dados
        return 'Fornecedor deletado com sucesso!';  // Retorna uma mensagem de sucesso
    } else {
        return 'Fornecedor não encontrado';  // Retorna uma mensagem de erro caso o fornecedor não seja encontrado
    }
});

// Rota para testar a conexão com o banco de dados
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();  // Tenta obter uma conexão com o banco de dados
        return "Conexão com o banco de dados bem-sucedida!";
    } catch (\Exception $e) {
        return "Falha na conexão com o banco de dados: " . $e->getMessage();
    }
});

