@push('styles')
<style>
   *{
       padding: 0;
       margin: 0;
   }
   #header {
       margin: auto;
       width: 500px;
       font-family: arial,helvetica,sans-serif;
   }
   ul,ol {
       list-style: none;
   }
   .navbar li a {
    background: #000;
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
   }
   .navbar>li {
      float:left;
   }
   
</style>
@endpush

<div>
    <div id="header">
        <div class="navbar">

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a>
                <ul>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                </ul>
                </li>
                <li><a href="#">Acerca de</a>
                    <ul>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                        <li><a href="#">Item 3</a></li>
                        <li><a href="#">Item 4</a>
                            <ul>
                                <li><a href="#">Item 1</a></li>
                                <li><a href="#">Item 2</a></li>
                                <li><a href="#">Item 3</a></li>
                                <li><a href="#">Item 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">contacto</a></li>
            </ul>
        </div>
    </div>
</div>
