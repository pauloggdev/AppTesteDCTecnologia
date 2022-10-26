<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uuid = Str::uuid();
        $vendaId = DB::table('vendas')->insert([
            'id' => $uuid,
            'nome_cliente' => "Paulo João",
            'quantidade_parcelas' => NULL,
            'valor_total_parcela' => NULL,
            'total_venda' => 2000,
            'forma_pagamento' => 'CREDITO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('venda_itens')->insert([
            'venda_id' => $uuid,
            'nome_produto' => 'Computador hp',
            'preco_produto' => 2000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $uuid = Str::uuid();
        $vendaId = DB::table('vendas')->insert([
            'id' => $uuid,
            'nome_cliente' => "Delfina João",
            'quantidade_parcelas' => NULL,
            'valor_total_parcela' => NULL,
            'total_venda' => 2000,
            'forma_pagamento' => 'DEBITO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('venda_itens')->insert([
            'venda_id' => $uuid,
            'nome_produto' => 'Impressora',
            'preco_produto' => 1500,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
