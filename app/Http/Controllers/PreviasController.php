<?php

namespace cg\Http\Controllers;
use cg\models\terrestre;
use cg\models\aerea;
use Illuminate\Support\Facades\DB;
use DataTables;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Request;

class PreviasController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function ranking(){
        return view('previas.ranking');
    }

    public function getRanking(Request $request){
        $terrestre = DB::table('terrestre')->select(
            'Cliente',
            DB::raw("SUM(IIF(Alerta_Geral<>'Ok',1,0)) as Erros")
        )->where([
            ['GrupoCLi','=',$request->input('grupo')],
            ['divisao','=',$request->input('divisao')],
            ['Cliente','not like','%particular%'],
            ['Cliente','not like','%evento%'],
            ['Cliente','not like','%lazer%']
        ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
        ->groupBy('Cliente')
        ->get();

            $aereo = DB::table('aereo')->select(
                'Cliente',
                DB::raw("SUM(IIF(Alerta_Geral<>'Ok',1,0)) as Erros")
            )->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->groupBy('Cliente')
            ->get();

    }

    public function farolGerencial()
    {
        return view('previas.farolGerencial');
    }

    public function aereo()
    {
        return view('previas.aereo');
    }

    public function terrestre()
    {
        return view('previas.terrestre');
    }
    public function tabela()
    {
        return view('previas.tabela');
    }

    public function aereoTable(Request $request)
    {
        $previas = null;
        switch($request->input('erros')){
            case 'Sim':
            $previas = DB::table('aerea')->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%'],
                ['Referencia','not like','%ADM%'],
                ['Alerta_Geral','<>','OK']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->get();
            return Datatables::of($previas)->make();
            break;

            case 'Nao':
            $previas = DB::table('aerea')->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Referencia','not like','%ADM%'],
                ['Cliente','not like','%lazer%'],
                ['Cliente','not like','%lazer%']
                ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])->get();
            return Datatables::of($previas)->make();
            break;
        }
    }

    public function terrestreTable(Request $request)
    {   
        $previas = null;
        switch($request->input('erros')){
            case 'Sim':
            $previas = DB::table('terrestre')->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%'],
                ['Alerta_Geral','<>','OK']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->get();
            return Datatables::of($previas)->make();
            break;

            case 'Nao':
            $previas = DB::table('terrestre')->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%']
                ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])->get();
            return Datatables::of($previas)->make();
            break;
        }
        
    }

}
