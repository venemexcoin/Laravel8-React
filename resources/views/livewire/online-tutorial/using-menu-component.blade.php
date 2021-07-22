@push('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
::-moz-selection {
  background: #cc0000;
  text-shadow: none;
}

::selection {
  background: #cc0000;
  text-shadow: none;
}

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  border: 0;
  font: inherit;
  font-size: 100%;
  margin: 0;
  padding: 0;
  vertical-align: baseline;
  text-rendering: optimizeLegibility;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
    display: flex;
    justify-content:flex-end;
    align-items: flex-start;
    min-height: 100vh;
    background: #232c33;
    margin-right: 10px; 
}
.navigation {
    position: relative;
    height: 585px;
    width: 70px;
    background: #2b343b;
    box-shadow: 10px 0 0 #4187f6;
    border-left: 10px solid #2b343b;
    overflow: hidden;
    z-index: 100;
    transition: width 0.5s; 
}
.navigation:hover {
    width: 300px;
}
.navigation ul {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding-left: 5px;
    padding-top: 40px;
}
.navigation ul li {
    position: relative;
    list-style: none;
    width: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
.navigation ul li.active {
    background: #4187f6;
}
.navigation ul li a {
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: #fff;
}
.navigation ul li.active a::before {
 content:'';
 position: absolute;
 top: -30px;
 right: 0;
 width: 30px;
 height: 30px;
 background: #2b343b; 
 border-radius: 50%;
 box-shadow: 15px 15px 0 #4187f6;  
}
.navigation ul li.active a::after {
 content:'';
 position: absolute;
 bottom: -30px;
 right: 0;
 width: 30px;
 height: 30px;
 background: #2b343b; 
 border-radius: 50%;
 box-shadow: 15px -15px 0 #4187f6;  
}
.navigation ul li a .icon {
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height:70px;
    text-align: center;
}
.navigation ul li a .icon ion-icon{
    position: relative;
    font-size: 1.5em;
    z-index: 1;
}
.navigation ul li a .title {
    position: relative;
    display: block;
    padding-left: 10px;
    height: 60px;
    line-height: 60px;
    white-space: nowrap;
}


</style>
@endpush
<div>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Prefile</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                    <span class="title">Messages</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Password</span>
                </a>
            </li>
            <li class="list">
                <a href="{{route('online.index')}}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sing Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    //add active class in selected table

    const list = document.querySelectorAll('.list');
    function activeLink() {
        list.forEach((item) => 
        item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item) => 
    item.addEventListener('click', activeLink));
</script>
@endpush
