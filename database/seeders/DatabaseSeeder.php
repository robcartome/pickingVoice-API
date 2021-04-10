<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PedidoSeeder::class,
            UbicacionSeeder::class,
            ProductoSeeder::class,
            PedidoProductoSeeder::class,
            ]);
    }
}
