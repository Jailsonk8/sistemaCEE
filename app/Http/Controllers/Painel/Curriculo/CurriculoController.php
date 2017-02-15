<?php

namespace App\Http\Controllers\Painel\Curriculo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Curriculo;

class CurriculoController extends Controller
{
    private $curriculo;
    
    public function __construct(Curriculo $curriculo) {
        $this->middleware('auth');
        $this->curriculo = $curriculo;
    }

    public function index(){
        $title = "Upload - Curriculo";
        return view('painel.discentes.curriculos.create_edite', compact('title'));
    }

    public function create(){
        $title = "Upload - Curriculo";
        return view('curriculos.index', compact('title'));
    }
    
    public function store(Request $request){
        $dataForm =  $request->all();
        $dataForm['discente_id'] = auth()->user()->id;
    
       $insert = $this->curriculo->create($dataForm);
       
       if ($insert)
             return redirect('discentes.index');
          else
            return redirect()->route('/upload');
        
    }
}
