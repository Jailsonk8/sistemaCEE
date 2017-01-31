<?php

namespace App\Http\Controllers\Painel\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Http\Requests\Painel\EmpresaFormRequest;
use DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $empresa;
    
    public function __construct(Empresa $empresa) {
        $this->middleware('auth');
        $this->empresa = $empresa;
    }
    
    public function index()
    {
        $title = "SistemaCEE - Empresa";
        return view('painel.empresas.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        $idUser = auth()->user()->id;
        $users = DB::select('select * from empresas where user_id_empresa = ?', [$idUser]);
        $dado = false;
        
        foreach ($users as $user){
            if($user->user_id_empresa == $idUser)
             $dado = true;
        }
        if($dado){
           return redirect ()->route ('empresas.index');  
        }else{
           return view('painel.empresas.create_edit', compact('title'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaFormRequest $request)
    {
         $dataForm = $request->all();
         $dataForm['user_id_empresa'] = auth()->user()->id;
         
         $insert = $this->empresa->create($dataForm);
         
          if ($insert)
             return redirect()->route('empresas.index');
          else
            return redirect()->route('empresas.create');
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
        //
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
        //
    }
}
