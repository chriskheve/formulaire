@extends('layouts.default', ['title' => 'Document & Edition'])

@section('content')

    <div class="wrapper">
        
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    @include('layouts/partials/_docBody');
    </div>
    
@endsection