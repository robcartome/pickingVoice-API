<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pedidos')->insert([
            'numPdo' => '163268',
            'nomCliente' => 'Wilfredo Silva',
            'estado' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pedidos')->insert(
            [
                'numPdo' => '163262',
                'nomCliente' => 'Vanesa Larco',
                'estado' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('pedidos')->insert(
            [
                'numPdo' => '163247',
                'nomCliente' => 'Kathy Sanchez',
                'estado' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );
        DB::table('pedidos')->insert(
            [
                'numPdo' => '163233',
                'nomCliente' => 'Robert Tolentino',
                'estado' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );
    }
}
