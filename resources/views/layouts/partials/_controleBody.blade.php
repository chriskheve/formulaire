

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1>General Form</h1>
             </div>
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active">General Form</li>
               </ol>
             </div>
           </div>
         </div><!-- /.container-fluid -->
     </section>


        <!-- Main content -->
        <section class="content">
                
                
            <div class="container-fluid">
               
                    <div class="row">
                        <!-- left column -->
                            <div class="col-md-6">
                                
                                <fieldset disabled="disabled">
                                    @foreach ($documents as $document)
                            
                                        <!-- Horizontal Form -->
                                        <!-- form start -->
                                        <form class="form-horizontal" method="POST" action="{{ route('docRef.store') }}">
                                            @csrf
                                        
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Document</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="date" class="col-sm-2 col-form-label">Recu le</label>
                                                                <div class="col-sm-10">
                                                                <input type="txt" name="date" class="form-control" id="date" placeholder="{{$document->date}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row {{ $errors->has('nature') ? 'has-error' : '' }}">
                                                                <label for="nature" class="col-sm-2 col-form-label">Nature n*</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" name="nature" value="{{ old('nature') }}" class="form-control" id="nature" placeholder="{{$document->nature}}">
                                                                {!! $errors->first('nature', '<span class="text-danger">:message</span>')  !!}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row {{ $errors->has('devise') ? 'has-error' : '' }}">
                                                                <label for="devise" class="col-sm-2 col-form-label">Devise</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" name="devise" class="form-control" value="{{ old('devise') }}" id="devise" placeholder="{{$document->devise}}">
                                                                {!! $errors->first('devise', '<span class="text-danger">:message</span>')  !!}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row {{ $errors->has('montant') ? 'has-error' : '' }}">
                                                                <label for="montant" class="col-sm-2 col-form-label ">Montant</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" name="montant" class="form-control" id="montant" value="{{ old('montant') }}" placeholder="{{$document->montant}}">
                                                                {!! $errors->first('montant', '<span class="text-danger">:message</span>')  !!}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row  ">
                                                                <label for="deduire" class="col-sm-2 col-form-label">Deduire</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" name="deduire" class="form-control" id="deduire" value="{{ old('deduire') }}" placeholder="{{$document->deduire}}">
                                                                {!! $errors->first('deduire', '<span class="text-danger">:message</span>')  !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-footer -->
                                                    </div>
                        
                                                    
                                                
                                            
                                        </form>
                                    @endforeach
                                    <!-- /.card -->
                                </fieldset>
                                <fieldset disabled="disabled">
                                    @foreach ($etats as $etat)                    
                                        <div class="card card-primary">
                                            <div class="card-header">
                                            <h3 class="card-title">Etat de decaissement</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <form role="form" method="POST" action="{{ route('etat.post', $document->id) }}">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group {{ $errors->has('montantDebourse') ? 'has-error' : '' }}">
                                                        <label for="montantDebourse">Montant debourse</label>
                                                        <input type="text" class="form-control" id="montantDebourse" name="montantDebourse" value="{{ $etat->montantDebourse }}" placeholder="Montant debourse">
                                                    </div>
                                                    <div class="form-group {{ $errors->has('nonDecaisse') ? 'has-error' : '' }}">
                                                        <label for="nonDecaisse">Non decaisse</label>
                                                        <input type="nonDecaisse" name="nonDecaisse" value="{{ $etat->nonDecaisse }}" class="form-control" id="nonDecaisse" placeholder="Non decaisse">
                                                    </div>
                                                    <div class="form-group {{ $errors->has('paiement') ? 'has-error' : '' }}">
                                                        <label for="paiement">Paiement a executer</label>
                                                        <input type="nonDecaisse" name="paiement" value="{{ $etat->paiement }}" class="form-control" id="paiement" placeholder="Paiement a executer">
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                
                                            </form>
                                        </div>
                                    
                                        
                                    @endforeach 
                                </fieldset> 

                            </div>
                        <!--/.col (left) -->

                            <div class="col-md-6">
                                <fieldset disabled="disabled">
                                    @foreach ($documents as $document)
                            
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Reference</h3>
                                        </div>
                                     <!-- /.card-header -->
                                                
                                        <div class="card-body">
                                            <div class="form-group row {{ $errors->has('beneficiaire') ? 'has-error' : '' }}">
                                                <label for="beneficiaire" class="col-sm-2 col-form-label">Beneficiaire</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="beneficiaire" value="{{ old('beneficiaire') }}" class="form-control" id="beneficiaire" placeholder="Beneficiaire">
                                                    {!! $errors->first('beneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('compteBeneficiaire') ? 'has-error' : '' }}">
                                                <label for="compteBeneficiaire" class="col-sm-2 col-form-label">Compte beneficiaire</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="compteBeneficiaire" value="{{ old('compteBeneficiaire') }}" class="form-control" id="Compte beneficiaire" placeholder="Beneficiaire">
                                                    {!! $errors->first('compteBeneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('banque') ? 'has-error' : '' }}">
                                                <label for="banque" class="col-sm-2 col-form-label">Banque</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="banque" value="{{ old('banque') }}" class="form-control" id="banque" placeholder="Banque">
                                                    {!! $errors->first('banque', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('objet') ? 'has-error' : '' }}">
                                                <label for="objet" class="col-sm-2 col-form-label">Objet</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="objet" value="{{ old('objet') }}" class="form-control" id="objet" placeholder="Objet">
                                                    {!! $errors->first('objet', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('dateDeSignature') ? 'has-error' : '' }}">
                                                <label for="dateDeSignature" class="col-sm-2 col-form-label ">Date de signature</label>
                                                <div class="col-sm-10">
                                                    <input type="date" name="dateDeSignature" class="form-control" id="montant" placeholder="Date de signature">
                                                    {!! $errors->first('dateDeSignature', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row  ">
                                                <label for="dateDeCloture" class="col-sm-2 col-form-label">Date de cloture</label>
                                                <div class="col-sm-10">
                                                    <input type="date" name="dateDeCloture" class="form-control" id="dateDeCloture" value="{{ old('dateDeCloture') }}" placeholder="Deduire">
                                                    {!! $errors->first('dateDeCloture', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('financement') ? 'has-error' : '' }}">
                                                <label for="financement" class="col-sm-2 col-form-label">Financement</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="financement" value="{{ old('financement') }}" class="form-control" id="financement" placeholder="Financement">
                                                    {!! $errors->first('financement', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('categorie') ? 'has-error' : '' }}">
                                                <label for="categorie" class="col-sm-2 col-form-label">Categorie</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="categorie" value="{{ old('categorie') }}" class="form-control" id="categorie" placeholder="Categorie">
                                                    {!! $errors->first('categorie', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('montantRef') ? 'has-error' : '' }}">
                                                <label for="montantRef" class="col-sm-2 col-form-label">Montant</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="montantRef" value="{{ old('montantRef') }}" class="form-control" id="montantRef" placeholder="Montant">
                                                    {!! $errors->first('montantRef', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('marche') ? 'has-error' : '' }}">
                                                <label for="marche" class="col-sm-2 col-form-label">Marche</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="marche" value="{{ old('marche') }}" class="form-control" id="marche" placeholder="Marche">
                                                    {!! $errors->first('marche', '<span class="text-danger">:message</span>')  !!}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </fieldset>
                            </div>
                        <!--/.col (left) -->
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                                   
                            <div class="card card-primary">
                                <div class="card-header">
                                <h3 class="card-title">Controle technique</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="POST" action="{{ route('controle.post', $document->id) }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group {{ $errors->has('lettre') ? 'has-error' : '' }}">
                                            <label for="lettre">Lettre de marche</label>
                                            <input type="text" class="form-control" id="lettre" name="lettre" value="{{ old('lettre') }}" placeholder="Lettre de marche">
                                        </div>
                                        <div class="form-group {{ $errors->has('reception') ? 'has-error' : '' }}">
                                            <label for="reception">Reception</label>
                                            <input type="text" name="reception" value="{{ old('reception') }}" class="form-control" id="reception" placeholder="Reception">
                                        </div>
                                        <div class="form-group {{ $errors->has('rapport') ? 'has-error' : '' }}">
                                            <label for="rapport">Rapport</label>
                                            <input type="text" name="rapport" value="{{ old('rapport') }}" class="form-control" id="rapport" placeholder="Rapport">
                                        </div>
                                        <div class="form-group {{ $errors->has('cahier') ? 'has-error' : '' }}">
                                            <label for="cahier">Cahier des attachements</label>
                                            <input type="text" name="cahier" value="{{ old('cahier') }}" class="form-control" id="cahier" placeholder="Cahier des attachements">
                                        </div>
                                        <div class="form-group {{ $errors->has('conformite') ? 'has-error' : '' }}">
                                            <label for="conformite">Conformite au bordereau de prix</label>
                                            <input type="text" name="conformite" value="{{ old('conformite') }}" class="form-control" id="conformite" placeholder="Conformite au bordereau de prix">
                                        </div>
                                        <div class="form-group {{ $errors->has('signat') ? 'has-error' : '' }}">
                                            <label for="signat">Signat pr reception Sces par beneficiaire</label>
                                            <input type="text" name="signat" value="{{ old('signat') }}" class="form-control" id="signat" placeholder="Signat pr reception Sces par beneficiaire">
                                        </div>
                                        <div class="form-group {{ $errors->has('rapportDeReception') ? 'has-error' : '' }}">
                                            <label for="rapportDeReception">Rapport reception provisoire/definitive</label>
                                            <input type="text" name="rapportDeReception" value="{{ old('rapportDeReception') }}" class="form-control" id="rapportrecep" placeholder="Rapport reception provisoire/definitive">
                                        </div>
                                        <div class="form-group {{ $errors->has('retenue') ? 'has-error' : '' }}">
                                            <label for="retenue">Retenue de garantie</label>
                                            <input type="text" name="retenue" value="{{ old('retenue') }}" class="form-control" id="retenue" placeholder="Retenue de garantie">
                                        </div>
                                        <div class="form-group {{ $errors->has('validation') ? 'has-error' : '' }}">
                                            <label for="validation">Validation des prestations</label>
                                            <input type="validation" name="validation" value="{{ old('validation') }}" class="form-control" id="validation" placeholder="Validation des prestations">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                    
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                <!-- /.row -->
            </div><!-- /.container-fluid -->
       
        </section>
        <!-- /.content -->
    <div class="col-md-6">
        
        <!-- general form elements -->
    </div>
</div>
