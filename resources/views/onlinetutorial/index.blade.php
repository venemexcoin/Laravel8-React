@extends('layouts.layout')

@section('title_base')
    onlinetutorial
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlineindex.css')}}">
@endsection


@section('content')

<h1 class="grid-title">Online Tutoriales</h1>

<div class="online-asside">
    <div class="online-card">
    <a href="{{ url('panel')}}" class="online-card__body">
        <span class="online-card__title">Sección de Botones, animados y sencillos (1)</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span> </br>
          <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p> 
        </div>
        
    </div>
    <div class="online-card">
        <a href="{{ url('panel1')}}" class="online-card__body"><span class="online-card__title">Sección de Paginas Completas, responsive y normal</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p> 
        </div>
        
    </div>
    <div class="online-card">
        <a href="{{ url('panel2')}}" class="online-card__body"><span class="online-card__title">Sección de formularios y login</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p>
        </div>
        
    </div>

    <div class="online-card">
        <a href="{{ url('panel3')}}" class="online-card__body"><span class="online-card__title">Animaciones (4) </span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p>
    </div>
</div>

<div class="online-card">
    <a href="{{ url('panel4')}}" class="online-card__body"><span class="online-card__title">Menus y Footer  </span></a>
    <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
        <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p>
</div>
</div>

<div class="contenedor">
   
</div>

@endsection