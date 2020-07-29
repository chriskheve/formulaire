

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        
        @include('layouts/partials/_grille')


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
                                        @include('layouts/partials/_documentField')
                                    @endforeach
                                    <!-- /.card -->
                                </fieldset>
                                

                            </div>
                        <!--/.col (left) -->

                            <div class="col-md-6">
                                <fieldset disabled="disabled">
                                    @foreach ($documents as $document)
                                    <fieldset disabled="disabled">
                                
                                
                                        @include('layouts/partials/_referenceField')

                                    </fieldset>
                                    @endforeach
                                </fieldset>
                            </div>
                        <!--/.col (left) -->
                    </div>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                                <fieldset disabled="disabled">
                                    @foreach ($etats as $etat)                    
                                        @include('layouts/partials/_etatField')>
                                     
                                    @endforeach 
                                </fieldset> 
                                                   
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
