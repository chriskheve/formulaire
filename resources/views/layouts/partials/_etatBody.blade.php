
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('layouts/partials/_grille')
     
            <!-- Main content -->
            <section class="content">
                
                
                <div class="container-fluid">
                    @foreach ($documents as $document)
                        <div class="row">
                            <!-- left column -->
                                <div class="col-md-6">
                                    
                                    <fieldset disabled="disabled">
                                
                                
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
                                        <!-- /.card -->
                                    </fieldset>
                                                            
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
                                                    <input type="text" class="form-control" id="montantDebourse" name="montantDebourse" value="{{ old('montantDebourse') }}" placeholder="Montant debourse">
                                                </div>
                                                <div class="form-group {{ $errors->has('nonDecaisse') ? 'has-error' : '' }}">
                                                    <label for="nonDecaisse">Non decaisse</label>
                                                    <input type="nonDecaisse" name="nonDecaisse" value="{{ old('nonDecaisse') }}" class="form-control" id="nonDecaisse" placeholder="Non decaisse">
                                                </div>
                                                <div class="form-group {{ $errors->has('paiement') ? 'has-error' : '' }}">
                                                    <label for="paiement">Paiement a executer</label>
                                                    <input type="nonDecaisse" name="paiement" value="{{ old('paiement') }}" class="form-control" id="paiement" placeholder="Paiement a executer">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            <!--/.col (left) -->

                                <div class="col-md-6">
                                    <fieldset disabled="disabled">
                                
                                
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Reference</h3>
                                            </div>
                                        <!-- /.card-header -->
                                                    
                                            <div class="card-body">
                                                <div class="form-group row {{ $errors->has('beneficiaire') ? 'has-error' : '' }}">
                                                    <label for="beneficiaire" class="col-sm-2 col-form-label">Beneficiaire</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="beneficiaire" value="{{ old('beneficiaire') }}" class="form-control" id="beneficiaire" placeholder="{{$document->beneficiaire}}">
                                                        {!! $errors->first('beneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('compteBeneficiaire') ? 'has-error' : '' }}">
                                                    <label for="compteBeneficiaire" class="col-sm-2 col-form-label">Compte beneficiaire</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="compteBeneficiaire" value="{{ old('compteBeneficiaire') }}" class="form-control" id="Compte beneficiaire" placeholder="{{$document->compteBeneficiaire}}">
                                                        {!! $errors->first('compteBeneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('banque') ? 'has-error' : '' }}">
                                                    <label for="banque" class="col-sm-2 col-form-label">Banque</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="banque" value="{{ old('banque') }}" class="form-control" id="banque" placeholder="{{$document->banque}}">
                                                        {!! $errors->first('banque', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('objet') ? 'has-error' : '' }}">
                                                    <label for="objet" class="col-sm-2 col-form-label">Objet</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="objet" value="{{ old('objet') }}" class="form-control" id="objet" placeholder="{{$document->objet}}">
                                                        {!! $errors->first('objet', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('dateDeSignature') ? 'has-error' : '' }}">
                                                    <label for="dateDeSignature" class="col-sm-2 col-form-label ">Date de signature</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="dateDeSignature" class="form-control" id="montant" placeholder="{{$document->dateDeSignature}}">
                                                        {!! $errors->first('dateDeSignature', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row  ">
                                                    <label for="dateDeCloture" class="col-sm-2 col-form-label">Date de cloture</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="dateDeCloture" class="form-control" id="dateDeCloture" value="{{ old('dateDeCloture') }}" placeholder="{{$document->dateDeCloture}}">
                                                        {!! $errors->first('dateDeCloture', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('financement') ? 'has-error' : '' }}">
                                                    <label for="financement" class="col-sm-2 col-form-label">Financement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="financement" value="{{ old('financement') }}" class="form-control" id="financement" placeholder="{{$document->financement}}">
                                                        {!! $errors->first('financement', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('categorie') ? 'has-error' : '' }}">
                                                    <label for="categorie" class="col-sm-2 col-form-label">Categorie</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="categorie" value="{{ old('categorie') }}" class="form-control" id="categorie" placeholder="{{$document->categorie}}">
                                                        {!! $errors->first('categorie', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('montantRef') ? 'has-error' : '' }}">
                                                    <label for="montantRef" class="col-sm-2 col-form-label">Montant</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="montantRef" value="{{ old('montantRef') }}" class="form-control" id="montantRef" placeholder="{{$document->montantRef}}">
                                                        {!! $errors->first('montantRef', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('marche') ? 'has-error' : '' }}">
                                                    <label for="marche" class="col-sm-2 col-form-label">Marche</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="marche" value="{{ old('marche') }}" class="form-control" id="marche" placeholder="{{$document->marche}}">
                                                        {!! $errors->first('marche', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </fieldset>
                                </div>
                        <!--/.col (left) -->
                        </div>
                    @endforeach
                <!-- /.row -->
                </div><!-- /.container-fluid -->
           
            </section>
            <!-- /.content -->
        <div class="col-md-6">
            
            <!-- general form elements -->
        </div>
    </div>
 