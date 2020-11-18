
@extends('layouts.layout1')

@section('title_base')
    Bluuweb
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/layout1.css')}}">
@endsection


@section('content')

<div class="main_box">

<h1 class="bluuweb-title">Menu Bluuweb</h1>



<div class="grid-container">
  <div class="item1">
      <h3 class="header-title">Menu de actividades</h3> 
  </div>
  <div class="item2 bluuwed-menu">
      <ol>
          <li><a href="">Lorem ipsum dolor sit amet</a></li>
          <li><a href="">No definido</a></li>
          <li><a href="">No definido</a></li>
      </ol>
  </div>
  <div class="item3">Main</div>  
  <div class="item5">Footer</div>
</div>

</div>

@endsection