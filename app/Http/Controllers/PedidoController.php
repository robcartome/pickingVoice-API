<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Database\Seeders\PedidoProductoSeeder;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\throwException;

class PedidoController extends Controller
{
  public function index()
  {
    $dataPedidos = Pedido::all();
    return response()->json($dataPedidos);
  }

  public function updateEstadoPedido( $idPdo){
    /**
     * Al ser llamado Verifica si todos los estados de los items estan True Para pasar el Estado del pedido a True
     */
    $countCurrentItems = DB::select('SELECT count(*) FROM `pedido_producto` WHERE pedido_id = ?', [$idPdo]);
    $countItemsTrueEstado = DB::select('SELECT count(*) FROM `pedido_producto` WHERE pedido_id = ? and estado = 1', [$idPdo]);
    $updateEstado = 0;
    if($countCurrentItems == $countItemsTrueEstado){
      $updateEstado =  DB::update('UPDATE `pedidos` set estado = true WHERE id = ? ', [$idPdo]);
      return response()->json( ["estado" => true] );
    } else {
      $updateEstado =  DB::update('UPDATE `pedidos` set estado = false WHERE id = ? ', [$idPdo]);
      return response()->json( ["estado" => false]);
    }
    
  }

  public function showProductos($idPdo)
  {
    //$dataPedido = Pedido::find($numPdo);
    /**
     * Para ver el productos de cada pedido
    */
    $dataProductos = DB::select('SELECT  
    pp.id AS "idItem", 
    p.id AS "idProd", 
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

  public function updateEstadoDetalle(Request $request, $idPdo, $idItem)
  {
    /**
     * Actualizamos el estado para el item del pedido si se cumple en el front que existe el cod Producto y Cantidad
    */
    // print_r($request->input("estado"));
    $updateEstadoDetalle = 0;
    if ($request->input("estado") == "true") {
      $updateEstadoDetalle =  DB::update('UPDATE `pedido_producto` set estado = true
                                          WHERE  pedido_id=? AND id = ? ', [$idPdo, $idItem]);
    } elseif ($request->input("estado") == "false") {
      $updateEstadoDetalle =  DB::update('UPDATE `pedido_producto` set estado = false
                                          WHERE  pedido_id=? AND id = ? ', [$idPdo, $idItem]);
    }
    if($updateEstadoDetalle == 1){
      return response()->json("Estado Actualizado");
    } else {
      return response()->json(['message' => 'Estado Not Change!'], 404);
    }
    
  }
}
