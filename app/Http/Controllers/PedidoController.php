<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
  public function index()
  {
    $dataPedidos = Pedido::all();
    return response()->json($dataPedidos);
  }

  public function showProductos($idPdo)
  {
    //$dataPedido = Pedido::find($numPdo);
    // Para ver el productos de cada pedido.
    $dataProductos = DB::select('SELECT  pp.id AS "idItem", p.id AS "idProd", 
    p.codProducto, 
    p.nomProducto, 
    pp.cantidad, 
    u.numRack, 
    u.posicion, 
    u.numNivel,
    pp.estado
    FROM pedido_producto pp, productos p, ubicacion u 
    WHERE pp.producto_id = p.id AND p.ubicacion_id = u.id AND pp.pedido_id = ?', [$idPdo]);

    return response()->json($dataProductos);
  }

  public function updateDetallePedido(Request $request, $idPdo, $idItem)
  {
    print_r($request->input("estado"));
    if ($request->input("estado") == "true") {

      $updateEstadoDetalle =  DB::update('UPDATE `pedido_producto` set estado = true WHERE  pedido_id=? AND id = ? ', [$idPdo, $idItem]);
      print_r($updateEstadoDetalle);
    } elseif ($request->input("estado") == "false") {

      $updateEstadoDetalle =  DB::update('UPDATE `pedido_producto` set estado = false WHERE  pedido_id=? AND id = ? ', [$idPdo, $idItem]);
      print_r($updateEstadoDetalle);
    }

    $currentProducto = Db::select('SELECT * FROM `pedido_producto` WHERE pedido_id=? AND id = ?', [$idPdo, $idItem]);
    return response()->json($currentProducto);
  }
}
