<?php
namespace App\Repositories;

use App\Models\Venda;

class VendaRepository{

    private $entity;

    public function __construct(Venda $venda)
    {
        $this->entity = $venda;
    }
    public function listarVendas(){
        return $this->entity::paginate();
    }
    public function getVenda($uuid){
        return $this->entity::with('vendaItens')->where('id',$uuid)->first();
    }
    
}