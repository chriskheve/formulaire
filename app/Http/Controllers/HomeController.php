<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $documents = DB::table('documents')
                                ->select('*')
                                ->get();
        $documentCount = $documents->count();
        $beneficiaires = DB::table('documents')->select('beneficiaire')->where('beneficiaire', '!=', 'null')->get()->count();
        
        $etats = DB::table('etats')
                                ->select('*')
                                ->get();
        // $debourse = $etats->montantDebourse;
        $controles = DB::table('controles')
                                ->select('*')
                                ->get();
        $traitements = DB::table('traitements')
                                ->select('*')
                                ->get();
        
            $total=0;
                  
                  
     
        
        return view('home', compact('documents', 'etats', 'controles', 'traitements', 'beneficiaires', 'documentCount', 'total'));
    }
}
