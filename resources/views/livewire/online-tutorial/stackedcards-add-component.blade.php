@push('scripts')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {

        background: #678b8b;
    }
    .nav-bar {
        display: grid;
        grid-gap: gap;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 100px;
        
    }
    .logo {
        width: 100%;
        height: 100px;
        padding:30px;
        display: flex;
        justify-content:center;
        align-items: center;
    }  
    .logo h2 {
        color: #fff;
        width: 100%;
        
    }
    .menu {
        width: 100%;
        height: 100px;
        padding:30px;
        display: flex;
        justify-content:center;
        align-items: center;
       
    }
    .menu .item{
        color: #fff;
        padding: 0 8% 0 0; 
    }

    /*comensamos Con la grid template */
    main{
        display: grid;
        font-family: sens-serif;
        height: 100vh;
        grid-gap: 10px;

        /* Especificar posicion de las areas */

        grid-template-areas: 
            "header"
            "contenido"
            "izquierda"
            "derecha"
            "footer"
        ;
    }
    main > * {
        background:goldenrod;
        display: flex;
           
    }
        /*Resposive */
    @media (min-width: 500px){
        main {
            grid-template-areas: 
            "header header header"
            "izquierda contenido derecha"
            "footer footer derecha";
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: 1fr 5fr 1fr;
        }
    }     

    /* Nombrar las Areas */

    header {
        grid-area: header;
    }
    aside:first-of-type {
        grid-area: izquierda;
    }
    article {
        grid-area:contenido;
    }
    aside:last-of-type {
        grid-area: derecha;
    }
    footer {
        grid-area:footer;
    }
    .container {
        padding: 10px;
    }
    article {
        background: transparent;
        display: block;
    }
    article .grid-2 {
        display: grid;
        grid-gap: 15px;
        height: 100%;
        grid-template-columns: (2, 1fr);
    }
    article .grid-2 > div {
        background: trasparente;
        color: #fff;
        padding: 10px;
    }

    header {
        display:block;
        
    }
    header .conter-header{
        display: flex;
        justify-content:center;
        align-items: center;   
    }
    header .conter-header h3 {
        display: block;
        padding: 20px;
    }
    article .grid-2 > div a {
        display: block;
        color: #fff;
        text-decoration: none;
        text-align: center;
    }
   
</style>
@endpush

<div class="nav-bar">
    <div class="logo">
        <h2>ChamocellDeveloper</h2>
    </div>
    <div class="blanco"></div>

    <div class="menu">
        <a href="/" class="item">Home</a>
        <a href="{{route('online.index')}}" class="item">Administration</a>
        <a href="#" class="item">Nuevo</a>
    </div>
</div>

<main>
    <header>
        <div class="conter-header">
            <h3>Sistema de Administración</h3>
        </div>  
    </header>
    <aside>izquierda</aside>
    <article>
        <section class="grid-2">
            <div><a href="{{route('online.stackedAdd')}}"> Agregar datos a 
                Resposive CSS Stacked Cards
                Menu </a>
                </div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
        </section>
    </article>
    <aside>Derecha</aside>
    <footer>Footer</footer>
</div>
</main>

