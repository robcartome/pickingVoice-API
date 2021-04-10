<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido_producto')->insert([
            'cantidad' => 4,
            'estado' => false,
            'pedido_id' => 1,
            'producto_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('pedido_producto')->insert([
            'cantidad' => 8,
            'estado' => false,
            'pedido_id' => 1,
            'producto_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('pedido_producto')->insert([
            'cantidad' => 10,
            'estado' => false,
            'pedido_id' => 1,
            'producto_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pedido_producto')->insert([
            'cantidad' => 12,
            'estado' => false,
            'pedido_id' => 2,
            'producto_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('pedido_producto')->insert([
            'cantidad' => 23,
            'estado' => false,
            'pedido_id' => 2,
            'producto_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pedido_producto')->insert([
            'cantidad' => 12,
            'estado' => false,
            'pedido_id' => 3,
            'producto_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('pedido_producto')->insert([
            'cantidad' => 24,
            'estado' => false,
            'pedido_id' => 3,
            'producto_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pedido_producto')->insert([
            'cantidad' => 48,
            'estado' => false,
            'pedido_id' => 4,
            'producto_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
