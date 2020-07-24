<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
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
        $alls = DB::table('documents')
                ->join('controles', 'controles.document_id', '=', 'documents.id')
                ->join('etats', 'documents.id', '=', 'etats.document_id')
                ->where('documents.id', '=', $id)
                ->get()->first();
        return view('print', compact('alls'));
    }
}
