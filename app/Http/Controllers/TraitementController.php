<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traitement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TraitementController extends Controller
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
        $controles = DB::table('controles')
                                ->select('*')
                                ->where('document_id', '=', $id)->get();
                
        return view('traitement', compact('documents', 'etats', 'controles'));
    }
    public function store(Request $request, $id){
       
        
        $traitement = new Traitement;

        $traitement->par =$request->par;
        $traitement->date =$request->date;
        $traitement->document_id = $id;
        $traitement->user_id = Auth::id();
        $traitement->save();
        
        return redirect()->route('root_path');
    }
}
