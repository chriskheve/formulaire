

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       @include('layouts/partials/_grille')

    <!-- Main content -->
    <section class="content">
        
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 mx-auto">
            
            
                <!-- Horizontal Form -->
                  <!-- form start -->
                  <form class="form-horizontal" method="POST" action="{{ route('docRef.store') }}">
                        @csrf
                        <div class="f-a">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Document</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="date" class="col-sm-2 col-form-label">Recu le</label>
                                        <div class="col-sm-10">
                                        <input type="date" name="date" class="form-control" id="date" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row {{ $errors->has('nature') ? 'has-error' : '' }}">
                                        <label for="nature" class="col-sm-2 col-form-label">Nature n*</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="nature" value="{{ old('nature') }}" class="form-control" id="nature" placeholder="Nature n*">
                                        {!! $errors->first('nature', '<span class="text-danger">:message</span>')  !!}
                                        </div>
                                    </div>
                                    <div class="form-group row {{ $errors->has('devise') ? 'has-error' : '' }}">
                                        <label for="devise" class="col-sm-2 col-form-label">Devise</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="devise" class="form-control" value="{{ old('devise') }}" id="devise" placeholder="Devise">
                                        {!! $errors->first('devise', '<span class="text-danger">:message</span>')  !!}
                                        </div>
                                    </div>
                                    <div class="form-group row {{ $errors->has('montant') ? 'has-error' : '' }}">
                                        <label for="montant" class="col-sm-2 col-form-label ">Montant</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="montant" class="form-control" id="montant" value="{{ old('montant') }}" placeholder="Montant">
                                        {!! $errors->first('montant', '<span class="text-danger">:message</span>')  !!}
                                        </div>
                                    </div>
                                    <div class="form-group row  ">
                                        <label for="deduire" class="col-sm-2 col-form-label">A déduire</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="deduire" class="form-control" id="deduire" value="{{ old('deduire') }}" placeholder="A déduire">
                                        {!! $errors->first('deduire', '<span class="text-danger">:message</span>')  !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    {{-- <button type="submit" class="btn btn-info">Sign in</button> --}}
                                    <button type="" class="btn btn-info float-right" onclick="plusSlides(1)">Suivant</button>
                                </div>
                                <!-- /.card-footer -->
                            </div>

                        </div>
                        <div class="f-a">
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
                                <div class="card-footer">
                                  <button type="" class="btn btn-default" onclick="plusSlides(-1)">Precedent</button>
                                  <input type="submit" class="btn btn-info float-right" value="Enregistrer" id="submit">
                                </div>

                            </div>
                        </div>
                  </form>
                <!-- /.card -->


            

          </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
      <!-- /.content -->

