<?php

namespace App\Http\Controllers;

use App\Repositories\VendaRepository;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Http\Response;


class VendaController extends Controller
{
    private $vendaRepository;

    public function __construct(VendaRepository $vendaRepository)
    {
        $this->vendaRepository = $vendaRepository;
    }
    public function print($uuid)
    {

        $data['venda'] = $this->vendaRepository->getVenda($uuid);

        
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view("vendaRelatorio", $data));
        $dompdf->setPaper('A4');
        $dompdf->render();
        $output = $dompdf->output();
        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' =>  'inline; filename="myfilename.pdf"',
        ]);


    }

    public function create()
    {
        // $data['vendas'] = $this->vendaRepository->listarVendas();
        // dd($data['vendas']);
        return view('vendas.create');
    }
}
