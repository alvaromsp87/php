<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Função que exibe todos os produtos
    public function index()
    {
        // Consulta todos os produtos com suas categorias
        $produtos = Produto::with('categoria')->get();

        // Renderiza a view e passa os dados
        return view('produtos.index', compact('produtos'));
    }
}
