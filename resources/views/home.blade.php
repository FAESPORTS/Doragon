@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
    @endsection

@section('content')
        @include('home.slider')

        <div class="container">
            @include('home.news')

            <h1>Hola</h1>
        </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/jssor.slider.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/home.js') }}" defer></script>
@endsection
