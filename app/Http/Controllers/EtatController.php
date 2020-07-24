<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EtatController extends Controller
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
        return view('etat', compact('documents'));
    }
    public function store(Request $request, $id){
        
        $etat = new Etat;

        $etat->montantDebourse =$request->montantDebourse;
        $etat->nonDecaisse =$request->nonDecaisse;
        $etat->paiement = $request->paiement;
        $etat->document_id = $id;
        $etat->user_id = Auth::id();
        $etat->save();
    
        return redirect()->route('root_path');
    }
}
