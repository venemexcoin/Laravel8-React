@extends('layouts.layout7')

@section('title_base')
    Base de clientes
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/layout1.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/cliente/cliente.css')}}">
@endsection


@section('content')
    
        <div class="main-container">

            <table class="table">
                <thead>
                  <tr>
                    <th>Estado</th>
                    <th>Nombre</th>
                    <th>Imei</th>
                    <th>Company</th>
                    <th>Nota</th>
                    <th>Valor</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr class="clien_table__item">
                      <td><span id="estado" class="estado_0">{{$client->estado}}</span></td>
                      <td>{{$client->alias}}</td>
                      <td>{{$client->imei}}</td>
                      <td><a href="#">{{$client->company}}</a></td>
                      <td>{{$client->nota}}</td>
                      <td>{{$client->mxn}}</td>
                    </tr> 
                    @endforeach
                 
                </tbody>
              </table>
</div>



@endsection