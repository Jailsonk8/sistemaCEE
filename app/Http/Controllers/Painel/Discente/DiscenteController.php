<?php

namespace App\Http\Controllers\Painel\Discente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discente;
use App\Http\Requests\Painel\DiscenteFormRequest;
use DB;

class DiscenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $discente;
    
    public function __construct(Discente $discente) {
        $this->middleware('auth');
        $this->discente = $discente;
    }

    public function index()
    {    
        $title = "Cadastros de Disente";
        return view('painel.discentes.index', compact('title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro Discente";
        return view('painel.discentes.create_edite', compact('title'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscenteFormRequest $request)
    {   
         $dataForm = $request->except('nome_curriculo');
         $dataForm['user_id'] = auth()->user()->id;
         
         $insert = $this->discente->create($dataForm);
         
<<<<<<< HEAD
          if ($insert)
             return redirect()->route('curriculos.create');
          else
=======
         $insert = $this->discente->create($dataForm);
         
         if ($insert)
             return redirect()->route('discentes.index');
         else
>>>>>>> origin/master
            return redirect()->route('discentes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    
    public function storeCurriculo(DiscenteFormRequest $request)
    {
        
    }
    
}
