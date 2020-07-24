<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvisController extends Controller
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
                               
                
        return view('avis', compact('documents', 'etats', 'controles'));
    }
}
