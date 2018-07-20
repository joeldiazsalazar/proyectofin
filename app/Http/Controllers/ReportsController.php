<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Payment;
use App\Postulant;

class ReportsController extends Controller
{
    public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }


    public function registros_m($anio,$mes,$estado)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $selector = $estado;
        $pagos=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->get();
        
        $suma=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->sum('monto');
        // $total=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->sum('monto')->get();

        // $data=array("registros"=>$pagos);
        return   json_encode(array(

                'registros' => $pagos,
                'suma' => $suma
        ));

    }


     public function registros_post($anio,$mes,$estado)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $selector = $estado;
        $info=Postulant::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->get();

        $data=array("totalpost"=>$info);
        return   json_encode($data);


    }


    public function index()
    {   
        $anio=date("Y");
        $mes=date("m");
        $estado = "Seleccione";
        return view("report.index")
               ->with("anio",$anio)
               ->with("mes",$mes)
               ->with("estado",$estado);

    }
    public function index_pos()
    {   
        $anio=date("Y");
        $mes=date("m");
        $estado = "Seleccione";
        return view("report.postulant")
               ->with("anio",$anio)
               ->with("mes",$mes)
               ->with("estado",$estado);

    }



    
    
}
