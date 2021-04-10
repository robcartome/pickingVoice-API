<?php
namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;


class PedidoController extends Controller{
  public function index(){
    $dataPedidos = Pedido::all();
    return response()->json($dataPedidos);
  }

  public function show($numPdo){
    $dataPedido = Pedido::find($numPdo);
    return response()->json($dataPedido);
  }
}