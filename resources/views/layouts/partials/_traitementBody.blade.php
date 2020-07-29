

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
                            <div class="col-md-6">
                                <fieldset disabled="disabled">
                                    @foreach ($controles as $controle)
                                        
                                            @include('layouts/partials/_controleField') 
                                        
                                    @endforeach

                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset disabled="disabled">
                                    @foreach ($etats as $etat)                    
                                        
                                        @include('layouts/partials/_etatField')            
                                        
                                    @endforeach 
                                </fieldset> 
                            </div>
                        </div>
                
                
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="card card-primary">
                                    <div class="card-header">
                                    <h3 class="card-title">Traitement a priori</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form" method="POST" action="{{ route('traitement.post', $document->id) }}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group {{ $errors->has('par') ? 'has-error' : '' }}">
                                                <label for="par">Par</label>
                                                <input type="text" class="form-control" id="par" name="par" value="{{ old('par') }}" placeholder="par">
                                            </div>
                                            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                                <label for="date">Date</label>
                                                <input type="date" name="date" value="{{ old('date') }}" class="form-control" id="date" placeholder="Date">
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
</div>
