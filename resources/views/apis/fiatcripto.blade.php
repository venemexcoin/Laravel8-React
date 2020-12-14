@extends('layouts.layout')

@section('title_base')
    Api Panel
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/api1.css')}}">
@endsection


@section('content')

<div class="body">

<div class="container">
    <div class="card">
      <div class="face face1">
        <div class="content">
           <i class="fab fa-bitcoin"></i>            
          <h3>Bitcoin</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="{{url('/apis/ejercicio1')}}" type="button">Read More</a>
        </div>
      </div>
   </div>

   <div class="card">
    <div class="face face1">
      <div class="content">
         <i class="fab fa-ethereum"></i>            
        <h3>Ethereum</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="{{url('/apis/ejercicio2')}}" type="button">Read More</a>
      </div>
    </div>
 </div>

 <div class="card">
    <div class="face face1">
      <div class="content">
         <i class="fas fa-dollar-sign"></i>            
        <h3>Pesos</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="{{url('/apis/ejercicio3')}}" type="button">Read More</a>
      </div>
    </div>
 </div>

 <div class="card">
    <div class="face face1">
      <div class="content">
        <i class="fas fa-dollar-sign"></i>             
        <h3>Dolar</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="{{url('/apis/ejercicio4')}}" type="button">Read More</a>
      </div>
    </div>
 </div>

 <div class="card">
    <div class="face face1">
      <div class="content">
         <i class="fab fa-windows"></i>            
        <h3>Windows</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" type="button">Read More</a>
      </div>
    </div>
 </div>

 <div class="card">
    <div class="face face1">
      <div class="content">
         <i class="fab fa-windows"></i>            
        <h3>Windows</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" type="button">Read More</a>
      </div>
    </div>
 </div>
</div>
</div>



@endsection

@section('script')
<script src="{{asset('assets/js/api1.js')}}"></script>
@endsection