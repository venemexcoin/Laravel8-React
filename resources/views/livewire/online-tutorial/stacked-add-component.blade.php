<div>
    <style>
        main > * {
            background: goldenrod;
            padding: 10px;
            font-size: 3em;
        }

        main {
            display: grid;
            grid-gap: 10px;
            grid-template-areas: 
                "header"
                "izquierda"
                'contenido'
                'derecha'
                "footer";
        }

        @media (min-width: 500px){
            main {
                grid-template-areas: 
                "header header header"
                "izquierda izquierda izquierda"
                'contenido contenido contenido'
                'derecha derecha derecha'
                "footer footer footer";
            }
        }

        header {
            grid-area: header;
        }
        aside:first-of-type {
            grid-area:izquierda;
        }
        article {
            grid-area: contenido;
        }
        aside:last-of-type {
            grid-area: derecha;
        }
        footer{
            grid-area: footer;
        }
       
    </style>

    <main>
     <header>Header</header>
     <aside>Izquierda</aside>
     <article>Contenido</article>
     <aside>Derecha</aside>
     <footer>Footer</footer>
    </main>
</div>
