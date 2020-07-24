<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocRefController extends Controller
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
        return view('docRef');
    }
    
    public function store(Request $request){
        
        $document = new Document;

        $document->date =$request->date;
        $document->nature =$request->nature;
        $document->devise =$request->devise;
        $document->montant =$request->montant;
        $document->deduire =$request->deduire;
        

        $document->beneficiaire =$request->beneficiaire;
        $document->compteBeneficiaire =$request->compteBeneficiaire;
        $document->banque =$request->banque;
        $document->objet =$request->objet;
        $document->dateDeSignature =$request->dateDeSignature;
        $document->dateDeCloture =$request->dateDeCloture;
        $document->financement =$request->financement;
        $document->categorie =$request->categorie;
        $document->montantRef =$request->montantRef;
        $document->marche =$request->marche;
        $document->user_id = Auth::id();
        $document->save();
    
    
    

        return redirect()->route('root_path');

    }
}
