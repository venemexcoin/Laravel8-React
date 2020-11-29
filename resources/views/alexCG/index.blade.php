@extends('layouts.layout2')

@section('title_base')
    AlexCG
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/GRID/alexIndex.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/alexcg/alexIndex.css')}}">
@endsection


@section('content')

<div class="alex-contenidor">
    <div class="alex-header">Menu Principal de AlexCG Design</div>
    <div class="alex-sidebar">
        <ul>
            <li id="ejempl1"><a href="">ejemplo1</a></li>
            <li id="ejempl2"><a href="">ejemplo2</a></li>
            <li id="ejempl3"><a href="">ejemplo3</a></li>
            <li id="ejempl4"><a href="">ejemplo4</a></li>
            <li id="ejempl5"><a href="">ejemplo5</a></li>
            <li id="ejempl6"><a href="">ejemplo6</a></li>
            <li id="ejempl7"><a href="">ejemplo7</a></li>
            <li id="ejempl8"><a href="">ejemplo8</a></li>
            <li id="ejempl9"><a href="">ejemplo9</a></li>
            <li id="ejempl10"><a href="">ejemplo10</a></li>
            
            
        </ul>
    </div>
    <div class="alex-contenido">
        
    </div>
    <div class="alex-footer"></div>

</div>

@endsection

@section('scripts')

@endsection