@push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            fontfamily:consolas; 
        }
        body {
            background: #000;
            cursor: context-menu;
        }
        section {
            padding: 40px;
            color: #666;
        }
        section h2 {
            font-size: 3.5em;
        }
        section p {
            font-size: 1.2em;
        }
        #cursorMeter {
            top: 0;
            position: fixed;
            width: 400px;
            height:80px;
            /* background: #ff0; */
            pointer-events: none;
            z-index: 100000;
        }
        #scrollPath {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: #333;
        }
        #pregressBar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(to left,#008aff,#00ffe7);
            animation: animate 5s linear infinite;
        }
        #pregressBar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to left,#008aff,#00ffe7);
            filter: blur(10px);
        }
        #pregressBar::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to left,#008aff,#00ffe7);
            filter: blur(30px);
        }
        @keyframes animate {
            0%,100% 
            {
                filter: hue-rotate(0deg);
            }
            50%
            {
                filter: hue-rotate(360deg);
            }
        }
        #percent {
            position: absolute;
            top: 30px;
            left: 0;
            color: #fff;
            font-size: 1.2em;
            padding: 2px 5px;
            background: #fff;
            color: #333;
        }
    </style>
@endpush
<div>
   <section>
       <h2>Creative Scroll Progress Bar</h2>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum rerum, ad eveniet iste quasi voluptatibus dolor tenetur quia. Quasi ullam ab quo doloribus perspiciatis omnis vel, itaque ipsam veniam. Porro aut adipisci aperiam ad quidem aliquid cumque aliquam quibusdam eveniet non numquam fugiat quam iusto est eligendi doloremque alias reprehenderit repudiandae rem in, ipsum rerum nobis quisquam. Obcaecati recusandae autem nihil rerum nisi nemo a voluptatibus excepturi, repellat dolores. Dolorum velit quibusdam sed reiciendis quia dolore dolores nostrum maiores aliquid obcaecati mollitia labore aliquam magnam necessitatibus nesciunt, ratione vero? Doloremque autem labore facere eius sunt, consequuntur fuga recusandae consequatur tempore voluptatum accusamus aspernatur, nostrum itaque illo commodi voluptates molestias expedita animi unde optio? Labore debitis alias explicabo dicta. Repudiandae quibusdam asperiores enim. Magni voluptates iure optio iusto praesentium adipisci libero tenetur unde eum nobis sequi obcaecati quae, sit provident suscipit veniam, eligendi, perspiciatis facere recusandae repellendus quasi eius voluptatibus. Omnis voluptatem odit, necessitatibus maxime in deserunt, sunt modi quod magni tempora porro cum inventore possimus nulla sequi? Quaerat eum fugiat error aut quod voluptate illo molestiae sit, harum tempora quam quidem dolorem voluptas aspernatur inventore. Id earum ut quo aliquid dicta? Nulla officia molestias in quia repudiandae quidem laborum est possimus velit debitis quasi reprehenderit corporis asperiores eveniet labore saepe, eum temporibus fugit! Nulla asperiores sed expedita qui optio blanditiis ea iure necessitatibus numquam, eos fuga eius ullam ratione doloremque quis esse. Sed, perferendis nihil! Repellat ratione quas dolore quibusdam aut repellendus tempora assumenda saepe! Eaque iusto laborum velit, quae consequuntur doloribus magni et dolorem doloremque est dolores atque. Quasi provident laboriosam officiis porro a amet quas doloremque mollitia. Blanditiis illo id voluptatibus tempora quae deserunt at vero facilis magnam autem, quam excepturi nihil ipsa in optio sint aperiam expedita? Harum veniam eligendi inventore fuga, praesentium deleniti fugiat facilis!<br><br>
       >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum rerum, ad eveniet iste quasi voluptatibus dolor tenetur quia. Quasi ullam ab quo doloribus perspiciatis omnis vel, itaque ipsam veniam. Porro aut adipisci aperiam ad quidem aliquid cumque aliquam quibusdam eveniet non numquam fugiat quam iusto est eligendi doloremque alias reprehenderit repudiandae rem in, ipsum rerum nobis quisquam. Obcaecati recusandae autem nihil rerum nisi nemo a voluptatibus excepturi, repellat dolores. Dolorum velit quibusdam sed reiciendis quia dolore dolores nostrum maiores aliquid obcaecati mollitia labore aliquam magnam necessitatibus nesciunt, ratione vero? Doloremque autem labore facere eius sunt, consequuntur fuga recusandae consequatur tempore voluptatum accusamus aspernatur, nostrum itaque illo commodi voluptates molestias expedita animi unde optio? Labore debitis alias explicabo dicta. Repudiandae quibusdam asperiores enim. Magni voluptates iure optio iusto praesentium adipisci libero tenetur unde eum nobis sequi obcaecati quae, sit provident suscipit veniam, eligendi, perspiciatis facere recusandae repellendus quasi eius voluptatibus. Omnis voluptatem odit, necessitatibus maxime in deserunt, sunt modi quod magni tempora porro cum inventore possimus nulla sequi? Quaerat eum fugiat error aut quod voluptate illo molestiae sit, harum tempora quam quidem dolorem voluptas aspernatur inventore. Id earum ut quo aliquid dicta? Nulla officia molestias in quia repudiandae quidem laborum est possimus velit debitis quasi reprehenderit corporis asperiores eveniet labore saepe, eum temporibus fugit! Nulla asperiores sed expedita qui optio blanditiis ea iure necessitatibus numquam, eos fuga eius ullam ratione doloremque quis esse. Sed, perferendis nihil! Repellat ratione quas dolore quibusdam aut repellendus tempora assumenda saepe! Eaque iusto laborum velit, quae consequuntur doloribus magni et dolorem doloremque est dolores atque. Quasi provident laboriosam officiis porro a amet quas doloremque mollitia. Blanditiis illo id voluptatibus tempora quae deserunt at vero facilis magnam autem, quam excepturi nihil ipsa in optio sint aperiam expedita? Harum veniam eligendi inventore fuga, praesentium deleniti fugiat facilis!<br><br>
       >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum rerum, ad eveniet iste quasi voluptatibus dolor tenetur quia. Quasi ullam ab quo doloribus perspiciatis omnis vel, itaque ipsam veniam. Porro aut adipisci aperiam ad quidem aliquid cumque aliquam quibusdam eveniet non numquam fugiat quam iusto est eligendi doloremque alias reprehenderit repudiandae rem in, ipsum rerum nobis quisquam. Obcaecati recusandae autem nihil rerum nisi nemo a voluptatibus excepturi, repellat dolores. Dolorum velit quibusdam sed reiciendis quia dolore dolores nostrum maiores aliquid obcaecati mollitia labore aliquam magnam necessitatibus nesciunt, ratione vero? Doloremque autem labore facere eius sunt, consequuntur fuga recusandae consequatur tempore voluptatum accusamus aspernatur, nostrum itaque illo commodi voluptates molestias expedita animi unde optio? Labore debitis alias explicabo dicta. Repudiandae quibusdam asperiores enim. Magni voluptates iure optio iusto praesentium adipisci libero tenetur unde eum nobis sequi obcaecati quae, sit provident suscipit veniam, eligendi, perspiciatis facere recusandae repellendus quasi eius voluptatibus. Omnis voluptatem odit, necessitatibus maxime in deserunt, sunt modi quod magni tempora porro cum inventore possimus nulla sequi? Quaerat eum fugiat error aut quod voluptate illo molestiae sit, harum tempora quam quidem dolorem voluptas aspernatur inventore. Id earum ut quo aliquid dicta? Nulla officia molestias in quia repudiandae quidem laborum est possimus velit debitis quasi reprehenderit corporis asperiores eveniet labore saepe, eum temporibus fugit! Nulla asperiores sed expedita qui optio blanditiis ea iure necessitatibus numquam, eos fuga eius ullam ratione doloremque quis esse. Sed, perferendis nihil! Repellat ratione quas dolore quibusdam aut repellendus tempora assumenda saepe! Eaque iusto laborum velit, quae consequuntur doloribus magni et dolorem doloremque est dolores atque. Quasi provident laboriosam officiis porro a amet quas doloremque mollitia. Blanditiis illo id voluptatibus tempora quae deserunt at vero facilis magnam autem, quam excepturi nihil ipsa in optio sint aperiam expedita? Harum veniam eligendi inventore fuga, praesentium deleniti fugiat facilis!<br><br> 
    </p>
   </section>

   <div id="cursorMeter">
       <div id="percent">Page Scrolled</div>
       <div id="scrollPath">
           <div id="pregressBar"></div>
       </div>
   </div>
</div>
@push('scripts')
    <script>
        let cursorMeter = document.getElementById('cursorMeter');
        document.addEventListener('mousemove', function(e){
            cursorMeter.style.top = e.clientY+'px';
            cursorMeter.style.left = e.clientX+'px';
        })
        let percent = document.getElementById('percent');
        let pregressBar = document.getElementById('pregressBar');

        let totalHeight = document.body.scrollHeight - window.innerHeight;

        window.onscroll = function(){
            let progress = (window.pageYOffset / totalHeight) * 100;
            pregressBar.style.width = progress + '%';
            percent.innerHTML = "Page Scrolled " + Math.round(progress) + "%";
        }
    </script>
@endpush
