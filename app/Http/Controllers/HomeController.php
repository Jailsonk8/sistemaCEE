<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discente;

class HomeController extends Controller
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
    public function index()
    { 
        $acesso = auth()->user()->acesso;
        
        if($acesso == "D"){
           return redirect()->route('discentes.index'); 
        }
        if($acesso == "E"){
           return redirect()->route('empresas.index'); 
        }
        if($acesso == "A"){
           return redirect()->route('admin.index'); 
        }       

    }
    
    public function rolesPermissions()
    {
        $nameUser = auth()->user()->acesso;
        echo ("<h1>{$nameUser}</h1>");
      
        
        
        
        
        foreach( auth()->user()->roles as $role){
            echo "<b>{$role->name} > </b>";
            
            $permissions = $role->permissions;
           
            foreach($permissions as $permission){
                echo " $permission->name , ";
                 
            }
            echo "<hr>"; 
        }
    }
}
