
                                
                                
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Reference</h3>
                                            </div>
                                        <!-- /.card-header -->
                                                    
                                            <div class="card-body">
                                                <div class="form-group row ref {{ $errors->has('beneficiaire') ? 'has-error' : '' }}">
                                                    <label for="beneficiaire" class="col-sm-4 col-form-label">Beneficiaire</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="beneficiaire" value="{{ old('beneficiaire') }}" class="form-control" id="beneficiaire" placeholder="{{$document->beneficiaire}}">
                                                        {!! $errors->first('beneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('compteBeneficiaire') ? 'has-error' : '' }}">
                                                    <label for="compteBeneficiaire" class="col-sm-4 col-form-label">Compte beneficiaire</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="compteBeneficiaire" value="{{ old('compteBeneficiaire') }}" class="form-control" id="Compte beneficiaire" placeholder="{{$document->compteBeneficiaire}}">
                                                        {!! $errors->first('compteBeneficiaire', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('banque') ? 'has-error' : '' }}">
                                                    <label for="banque" class="col-sm-4 col-form-label">Banque</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="banque" value="{{ old('banque') }}" class="form-control" id="banque" placeholder="{{$document->banque}}">
                                                        {!! $errors->first('banque', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('objet') ? 'has-error' : '' }}">
                                                    <label for="objet" class="col-sm-4 col-form-label">Objet</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="objet" value="{{ old('objet') }}" class="form-control" id="objet" placeholder="{{$document->objet}}">
                                                        {!! $errors->first('objet', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('dateDeSignature') ? 'has-error' : '' }}">
                                                    <label for="dateDeSignature" class="col-sm-4 col-form-label ">Date de signature</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="dateDeSignature" class="form-control" id="montant" placeholder="{{$document->dateDeSignature}}">
                                                        {!! $errors->first('dateDeSignature', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row  ref">
                                                    <label for="dateDeCloture" class="col-sm-4 col-form-label">Date de cloture</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="dateDeCloture" class="form-control" id="dateDeCloture" value="{{ old('dateDeCloture') }}" placeholder="{{$document->dateDeCloture}}">
                                                        {!! $errors->first('dateDeCloture', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('financement') ? 'has-error' : '' }}">
                                                    <label for="financement" class="col-sm-4 col-form-label">Financement</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="financement" value="{{ old('financement') }}" class="form-control" id="financement" placeholder="{{$document->financement}}">
                                                        {!! $errors->first('financement', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref {{ $errors->has('categorie') ? 'has-error' : '' }}">
                                                    <label for="categorie" class="col-sm-4 col-form-label">Categorie</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="categorie" value="{{ old('categorie') }}" class="form-control" id="categorie" placeholder="{{$document->categorie}}">
                                                        {!! $errors->first('categorie', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref{{ $errors->has('montantRef') ? 'has-error' : '' }}">
                                                    <label for="montantRef" class="col-sm-4 col-form-label">Montant</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="montantRef" value="{{ old('montantRef') }}" class="form-control" id="montantRef" placeholder="{{$document->montantRef}}">
                                                        {!! $errors->first('montantRef', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                                <div class="form-group row ref{{ $errors->has('marche') ? 'has-error' : '' }}">
                                                    <label for="marche" class="col-sm-4 col-form-label">Marche</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="marche" value="{{ old('marche') }}" class="form-control" id="marche" placeholder="{{$document->marche}}">
                                                        {!! $errors->first('marche', '<span class="text-danger">:message</span>')  !!}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
