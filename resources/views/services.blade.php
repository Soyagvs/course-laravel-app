@extends('layouts.layout')

@section('title', 'Laravel | Services')

@section('content')
    <h1 class="title-services">Estos son mis servicios</h1>
    <div class="services-container">
        @component('_components.card')
            @slot('title', 'Service 1')
            @slot('content', 'services the educations and projects')
        @endcomponent

        @component('_components.card')
            @slot('title', 'Service 2')
            @slot('content', 'services the educations and projects')
        @endcomponent

        @component('_components.card')
            @slot('title', 'Service 3')
            @slot('content', 'services the educations and projects')
        @endcomponent
    </div>
@endsection
