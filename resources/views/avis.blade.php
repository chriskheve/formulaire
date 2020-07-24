@extends('layouts.default', ['title' => 'Avis motive'])

@section('content')

<div class="wrapper">
    
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    @include('layouts/partials/_avisBody');
</div>
    
@endsection
{{-- @extends('layouts.default', ['title' => 'Avis motive'])

@section('content')

    <div class="wrapper">
        
    @include('layouts/partials/_navbar')
    @include('layouts/partials/_aside')
    @include('layouts/partials/_avisBody');
    </div>
    
@endsection --}}