<?php

namespace App\Http\Controllers\Painel\Discente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discente;
use App\User;
use App\Http\Requests\Painel\DiscenteFormResquest;

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

      return view('painel.discentes.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Casdastro Discente";
        
        return view('painel.discentes.create_edite', compact('title', 'data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $dataForm = $request->all();
         $dataForm['user_id'] = auth()->user()->id;
         
         
         $insert = $this->discente->create($dataForm);
         
         if ($insert)
             return redirect()->route('discentes.index');
         else
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
        //
    }
}
