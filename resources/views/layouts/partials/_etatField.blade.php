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
                                        </div