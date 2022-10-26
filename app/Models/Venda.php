<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    public $incrementing = false;


    protected $fillable = [
        'id',
        'nome_cliente',
        'quantidade_parcelas',
        'forma_pagamento',
        'created_at',
        'updated_at'
    ];
    public function vendaItens()
    {
        return $this->hasMany(VendaItens::class, 'venda_id', 'id');
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";

        $query->where(function ($query) use ($term) {
            $query->where("nome_cliente", "like", $term)
                ->orwhere("forma_pagamento", "like", $term)
                ->orwhere("conta_corrente", "like", $term);
        });
    }
}
