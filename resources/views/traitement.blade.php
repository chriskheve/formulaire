@extends('layouts.default', ['title' => 'Traitement a priori'])

@section('content')

    <div class="wrapper">
            
        @include('layouts/partials/_navbar')
        @include('layouts/partials/_aside')
        @include('layouts/partials/_traitementBody')
    </div>
    
@endsection