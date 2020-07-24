@extends('layouts.default', ['title' => 'Etat de decaissement'])

@section('content')

    <div class="wrapper">
        
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    @include('layouts/partials/_etatBody')
    </div>
    
@endsection