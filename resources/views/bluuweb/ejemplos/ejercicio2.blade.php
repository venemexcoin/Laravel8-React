@extends('layouts.layout1')

@section('title_base')
    Bluuweb
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/layout1.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection


@section('content')

<div class="container">
    <div class=" main_box--ej2">
    <h1 class="my-5">ToDo List</h1>
    <form id="formulario">
        <input type="text"
            placeholder="Ingrese tarea"
            class="form-control my-2"
        >
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

    <hr>

    <div id="lista-tareas" class="mt-2">
        <div class="alert alert-dark">
            Sin tareas pendientes 😍
        </div>
    </div>


<template id="template">
    <div class="alert alert-warning d-flex justify-content-between align-items-center">
        <p class="m-0">Tarea #1</p>
        <h3 class="m-0">
            <i class="fas fa-check-circle text-success" role="button"></i>
            <i class="fas fa-minus-circle text-danger"  role="button"></i>
        </h3>
    </div>
</template>


</div>

</div>

@endsection

@section('script')
<script src="{{asset('assets/js/bluuweb/todoList.js')}}"></script>    
@endsection