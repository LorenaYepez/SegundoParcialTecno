<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_compra;
use DB;

class ReporteController extends Controller
{
    public function productos()
    {
        $repuestos=Detalle_compra::groupBy('idRepuesto')->select('idRepuesto',DB::raw('sum(cantidad) as cantidad'))
                                                        ->orderBy('cantidad','desc')->take(5)->get();

        $nombres=[];
        $cantidades=[];

        foreach($repuestos as $repuesto)
        {
            array_push($nombres,$repuesto->repuestos->nombre);
            array_push($cantidades,$repuesto->cantidad);
        }
        return view('reporte.repuestosVendidosGrafico')->with('data1',json_encode($cantidades))->with('labels1',json_encode($nombres));
    }
}
