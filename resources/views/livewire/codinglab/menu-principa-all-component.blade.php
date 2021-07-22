@push('styles')
<style>
    body {
        margin: 0;
        font-family: Verdana, Arial, Helvetica, sans-serif;
    }
    header {
        text-align: center;
        margin: 20px;
    }
    table{
        border-collapse: collapse;
    }
    td, th {
        padding: 5px 10px;
        border: 1px solid rgba(195, 194, 194, 0.2);
        font-size: 10px;
    }
    ion-icon{
        font-size: 20px;
        color: #000;
    }

    

    @media (max-width:768px) {
        header h1 {
            font-size: 16px;
        }

        table {
            width: 100%;
            font-size: 90%;
        }
        table tr {
            display: flex;
            flex-direction: column;
            border: 1px solid grey;
            padding: 1em;
            margin-bottom: 1em;
            font-size: 10px;

        }
        table thead {
            display: none;
        }
        table td[data-vista] {
            display: flex;
        }
        table td,
        table th {
            border: none;
        }
        table td[data-vista]::before {
            content: attr( data-vista );
            width: 60px;
            color: silver;
            font-weight: bold;
        }
    }
    
</style>
@endpush
<div>
    <div class="vistaWed">
        <header>
            <h1>Lista de Menu</h1>
        </header>
        <main>
            @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>widget1</th>
                        <th>widget2</th>
                        <th>widget3</th>
                        <th>Ruta</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $vistas as $vista)
                    <tr>
                        <td data-vista="id">{{$vista->id}}</td>
                        <td data-vista="img"><img src="{{asset('assets/img/Menu')}}/{{$vista->image}}" width="70"></td>
                        <td data-vista="title">{{$vista->title}}</td>
                        <td data-vista="widget1">{{$vista->widget1}}</td>
                        <td data-vista="widget2">{{$vista->widget2}}</td>
                        <td data-vista="widget3">{{$vista->widget3}}</td>
                        <td data-vista="URL">{{$vista->ruta}}</td>
                        <td>
                            <a href="{{route('codinglab.editmenu',['vista_id' => $vista->id])}}"><ion-icon name="create-outline"></ion-icon></a>
                            <a href="#" wire:click.prevent="deleteMenu({{$vista->id}})"><ion-icon name="trash-outline"></ion-icon></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>

    <div class="vista-movil">
        <div class="container">
            <div class="content">
                
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>

</script>
@endpush