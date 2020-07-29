
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
                                        @include('layouts/partials/_documentField')            
                                    </fieldset>

                                </div>

                                <div class="col-md-6">
                                    <fieldset disabled="disabled">
                                        @include('layouts/partials/_referenceField')
                                    </fieldset>
                                </div>
                        
                        </div>
                    @endforeach
                </div>
           
            </section>
            <!-- /.content -->
        <div class="col-md-10 mx-auto">
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
                                            
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
 