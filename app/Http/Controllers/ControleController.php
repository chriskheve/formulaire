<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Controle;

class ControleController extends Controller
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

    public function index($id){
        
        $documents = DB::table('documents')
                                ->select('*')
                                ->where('id', '=', $id)->get();
        $etats = DB::table('etats')
                                ->select('*')
                                ->where('document_id', '=', $id)->get();
                
        return view('controle', compact('documents', 'etats'));
    }
    public function store(Request $request, $id){

        $controle = new Controle;
        $controle->lettreDeMarche =$request->lettre;
        $controle->reception =$request->reception;
        $controle->rapport = $request->rapport;
        $controle->cahier =$request->cahier;
        $controle->conformite =$request->conformite;
        $controle->signat = $request->signat;
        $controle->rapportDeReception =$request->rapportDeReception;
        $controle->retenue =$request->retenue;
        $controle->validation = $request->validation;
        $controle->document_id = $id;
        $controle->user_id = Auth::id();
        $controle->save();
        
    
        return redirect()->route('root_path');
    }
}
