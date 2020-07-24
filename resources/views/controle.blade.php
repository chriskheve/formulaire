@extends('layouts.default', ['title' => 'Controle technique'])

@section('content')

    <div class="wrapper">
        
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    @include('layouts/partials/_controleBody');
    </div>
    
@endsection