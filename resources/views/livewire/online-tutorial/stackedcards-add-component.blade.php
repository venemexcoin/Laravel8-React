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
   
</style>
@endpush

<div class="nav-bar">
    <div class="logo">
        <h2>ChamocellDeveloper</h2>
    </div>
    <div class="blanco"></div>

    <div class="menu">
        <a href="/" class="item">Home</a>
        <a href="#" class="item">Administration</a>
        <a href="#" class="item">Regresar</a>
    </div>


</div>

