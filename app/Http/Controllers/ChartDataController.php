<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use app\Charts\UserChart;

class ChartDataController extends Controller
{

    
    public function getDataCadastros(Request $request)
    {
        $cadastros = Teste::orderBy('created_at', 'ASC')->pluck('nome');
        $cadastros = json_decode($cadastros);
        return $cadastros;
    }
    public function getDataApoio(Request $request)
    {
        $apoio_array = array(Teste::pluck('apoio'));
        return $apoio_array;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
