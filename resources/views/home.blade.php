@extends('layouts.default', ['title' => 'Accueil'])

@section('content')
<div class="wrapper">
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Administration</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active">Administration</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!-- ./col -->
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$documentCount}}</h3>
  
                  <p>Redaction</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$beneficiaires}}</h3>
  
                  <p>Beneficiaire</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-4">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  @foreach ($etats as $etat)
                   
                      <h3>{{ $total += floatVal($etat->montantDebourse) }}</h3>
                   
                      
                  @endforeach
                  {{-- <h3>65</h3> --}}
  
                  <p>Total debourse</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
         
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

					        <!-- /.row -->
	<div class="row">
	  <div class="col-12">
	    <div class="card card-primary">
	      <div class="card-header">
			    <h3 class="card-title">Document & Reference du contrat</h3>
			  </div>
				              <!-- /.card-header -->
				<div class="card-body table-responsive p-0">
				  <table class="table table-hover text-nowrap" id="document">
				    <thead>
				      <tr>
				        <th>Nature N*</th>
				        <th>Montant</th>
				        <th>A deduire</th>
				        <th>Beneficiaire</th>
				        <th>Compte bancaire</th>
				        <th>Banque</th>
				        <th>Objet</th>
				        <th>Financement</th>
				        <th>Categorie</th>
                <th>Marche</th>
                <th></th>
				        </tr>
				    </thead>
					  <tbody>
              @foreach ($documents as $document)
              <tr style="{{ ++$total % 2 == 0 ? 'background-color: rgba(255,255,255,0.5);' : '' }}">
                <td>{{ $document->nature }} </td>
                <td>{{ $document->montant }} {{ $document->devise }}</td>
                <td>{{ $document->deduire }} {{ $document->devise }}  </td>
                <td>{{ $document->beneficiaire }} </td>
                <td>{{ $document->compteBeneficiaire }} </td>
                <td>{{ $document->banque }} </td>
                <td>{{ $document->objet }} </td>
                <td>{{ $document->financement }} </td>
                <td>{{ $document->categorie }} </td>
                <td>{{ $document->marche }} </td>
                <td><a href="{{ route('etat', $document->id) }}">Etat de decaissement</a></td>

              </tr>
                  
              @endforeach
					  </tbody>
					</table>
				</div>
					              <!-- /.card-body -->
			</div>
					            <!-- /.card -->
    </div>
    
    
	  <div class="col-12">
	    <div class="card card-primary">
	      <div class="card-header">
			    <h3 class="card-title">Etat de decaissement</h3>
			  </div>
				              <!-- /.card-header -->
				<div class="card-body table-responsive p-0">
				  <table class="table table-hover text-nowrap" id="etat">
				    <thead>
				      <tr>
				        <th>Montants debourses</th>
				        <th>Non decaisse</th>
				        <th>Paiement a executer</th>
                <th></th>
				      </tr>
				    </thead>
					  <tbody>
              @foreach ($etats as $etat)
              <tr>
                  <td>{{ $etat->montantDebourse }} </td>
                  <td>{{ $etat->nonDecaisse }} </td>
                  <td>{{ $etat->paiement }} </td>
                  <td><a href="{{ route('controle', $etat->document_id) }}">Controle technique</a></td>

              </tr>
                  
              @endforeach
					  </tbody>
					</table>
				</div>
					              <!-- /.card-body -->
			</div>
					            <!-- /.card -->
    </div>
    
    
	  

	  {{-- <div class="col-12">
	    <div class="card card-primary">
	      <div class="card-header">
			    <h3 class="card-title">Controle technique</h3>
			  </div>
				              <!-- /.card-header -->
				<div class="card-body table-responsive p-0">
				  <table class="table table-hover text-nowrap" id="controle">
				    <thead>
				      <tr>
				        <th>Lettre de marche</th>
				        <th>Reception</th>
				        <th>Rapport</th>
				        <th>Cahier des attachements</th>
				        <th>Conformite au bordereau</th>
				        <th>Signat pour reception</th>
				        <th>Rapport de reception</th>
				        <th>Retenue de garanties</th>
                <th>Validation des prestations</th>
				      </tr>
				    </thead>
					  <tbody>
              @foreach ($controles as $controle)
              <tr>
                <td>{{ $controle->lettreDeMarche }} </td>
                <td>{{ $controle->reception }} </td>
                <td>{{ $controle->rapport }} </td>
                <td>{{ $controle->cahier }} </td>
                <td>{{ $controle->conformite }} </td>
                <td>{{ $controle->signat }} </td>
                <td>{{ $controle->rapportDeReception }} </td>
                <td>{{ $controle->retenue }} </td>
                <td>{{ $controle->validation }} </td>
                  <td><a href="{{ route('traitement', $controle->document_id) }}">Traitement a priori</a></td>

              </tr>
                  
              @endforeach
					  </tbody>
					</table>
				</div>
					              <!-- /.card-body -->
			</div>
					            <!-- /.card -->
    </div>
    

	  <div class="col-12">
	    <div class="card card-primary">
	      <div class="card-header">
			    <h3 class="card-title">Traitement a priori</h3>
			  </div>
				              <!-- /.card-header -->
				<div class="card-body table-responsive p-0">
				  <table class="table table-hover text-nowrap" id="agents">
				    <thead>
				      <tr>
				        <th>Par</th>
				        <th>Date</th>
				      </tr>
				    </thead>
					  <tbody>
              @foreach ($traitements as $traitement)
              <tr>
                <td>{{ $traitement->par }} </td>
                <td>{{ $traitement->date }} </td>
                  <td><a href="{{ route('print', $controle->document_id) }}">Imprimer</a></td>

              </tr>
                  
              @endforeach
					  </tbody>
					</table>
				</div>
					              <!-- /.card-body -->
			</div>
					            <!-- /.card -->
	  </div> --}}
  </div>
<!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Controle technique</h3>
      </div>
                    <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" id="controle">
          <thead>
            <tr>
              <th>Lettre de marche</th>
              <th>Reception</th>
              <th>Rapport</th>
              <th>Cahier des attachements</th>
              <th>Conformite au bordereau</th>
              <th>Signat pour reception</th>
              <th>Rapport de reception</th>
              <th>Retenue de garanties</th>
              <th>Validation des prestations</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($controles as $controle)
            <tr>
              <td>{{ $controle->lettreDeMarche }} </td>
              <td>{{ $controle->reception }} </td>
              <td>{{ $controle->rapport }} </td>
              <td>{{ $controle->cahier }} </td>
              <td>{{ $controle->conformite }} </td>
              <td>{{ $controle->signat }} </td>
              <td>{{ $controle->rapportDeReception }} </td>
              <td>{{ $controle->retenue }} </td>
              <td>{{ $controle->validation }} </td>
                <td><a href="{{ route('traitement', $controle->document_id) }}">Traitement a priori</a></td>

            </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
                      <!-- /.card-body -->
    </div>
  </div>
   
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Grille de controle a imprimer</h3>
      </div>
                    <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" id="agents">
          <thead>
            <tr>
              <th>Par</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($traitements as $traitement)
            <tr>
              <td>{{ $traitement->par }} </td>
              <td>{{ $traitement->date }} </td>
                <td><a href="{{ route('print', $controle->document_id) }}">Imprimer</a></td>

            </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>
                      <!-- /.card-body -->
    </div>
                    <!-- /.card -->
  </div>
</div>



        <!-- Main row -->
    
@endsection
