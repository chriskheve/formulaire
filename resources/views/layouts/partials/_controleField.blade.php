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
                                                    <input type="text" class="form-control" id="lettre" name="lettre" value="{{ $controle->lettreDeMarche }}" placeholder="Lettre de marche">
                                                </div>
                                                <div class="form-group {{ $errors->has('reception') ? 'has-error' : '' }}">
                                                    <label for="reception">Reception</label>
                                                    <input type="text" name="reception" value="{{ $controle->reception }}" class="form-control" id="reception" placeholder="Reception">
                                                </div>
                                                <div class="form-group {{ $errors->has('rapport') ? 'has-error' : '' }}">
                                                    <label for="rapport">Rapport</label>
                                                    <input type="text" name="rapport" value="{{ $controle->rapport }}" class="form-control" id="rapport" placeholder="Rapport">
                                                </div>
                                                <div class="form-group {{ $errors->has('cahier') ? 'has-error' : '' }}">
                                                    <label for="cahier">Cahier des attachements</label>
                                                    <input type="text" name="cahier" value="{{ $controle->cahier }}" class="form-control" id="cahier" placeholder="Cahier des attachements">
                                                </div>
                                                <div class="form-group {{ $errors->has('conformite') ? 'has-error' : '' }}">
                                                    <label for="conformite">Conformite au bordereau de prix</label>
                                                    <input type="text" name="conformite" value="{{ $controle->conformite }}" class="form-control" id="conformite" placeholder="Conformite au bordereau de prix">
                                                </div>
                                                <div class="form-group {{ $errors->has('signat') ? 'has-error' : '' }}">
                                                    <label for="signat">Signat pr reception Sces par beneficiaire</label>
                                                    <input type="text" name="signat" value="{{ $controle->signat }}" class="form-control" id="signat" placeholder="Signat pr reception Sces par beneficiaire">
                                                </div>
                                                <div class="form-group {{ $errors->has('rapportDeReception') ? 'has-error' : '' }}">
                                                    <label for="rapportDeReception">Rapport reception provisoire/definitive</label>
                                                    <input type="text" name="rapportDeReception" value="{{ $controle->rapportDeReception }}" class="form-control" id="rapportrecep" placeholder="Rapport reception provisoire/definitive">
                                                </div>
                                                <div class="form-group {{ $errors->has('retenue') ? 'has-error' : '' }}">
                                                    <label for="retenue">Retenue de garantie</label>
                                                    <input type="text" name="retenue" value="{{ $controle->retenue }}" class="form-control" id="retenue" placeholder="Retenue de garantie">
                                                </div>
                                                <div class="form-group {{ $errors->has('validation') ? 'has-error' : '' }}">
                                                    <label for="validation">Validation des prestations</label>
                                                    <input type="validation" name="validation" value="{{ $controle->validation }}" class="form-control" id="validation" placeholder="Validation des prestations">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                            
                                        </form>
                                    </div>