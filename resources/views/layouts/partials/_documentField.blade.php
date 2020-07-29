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
                                                                <label for="deduire" class="col-sm-2 col-form-label">A déduire</label>
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
                                                