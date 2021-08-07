
@extends('layouts.layout')

@section('title_base')
  Codigo Nepal
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/codigonepal/codigoindex.css')}}">
    <style>
       
    </style>
@endsection

@section('content')
    <main>
        <div class="container">
        <div class="card">
            <div class="card-header">
                titulo de la targeta
            </div>
            <div class="card
            body">
                imh
            </div>
        </div>
        </div>
    </main>

@endsection

@section('scripts')
    @stack('scripts')
@endsection