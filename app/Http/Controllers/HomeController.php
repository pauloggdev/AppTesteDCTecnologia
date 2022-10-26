<?php

namespace App\Http\Controllers;

use App\Repositories\VendaRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $vendaRepository;

    public function __construct(VendaRepository $vendaRepository)
    {
        $this->middleware('auth');
        $this->vendaRepository = $vendaRepository;

    }

    public function index()
    {
        $data['vendas'] = $this->vendaRepository->listarVendas();
        return view('home', $data);
    }
}
