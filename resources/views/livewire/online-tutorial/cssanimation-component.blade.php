<div>
   <style>
       *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
       }
       .container {
           display: flex;
           justify-content:center;
           align-items:center;
           min-height: 100vh;
           background: radial-gradient(#2e2e2e,#333);
       }
       .infinite {
           position: relative;
           width: 800px;
           height: 160px;
           background: #525252;
           transform-origin: bottom;
           transform-style: preserve-3d;
           transform: perspective(500px) rotateX(30deg);
       }
       .infinite:before {
           content: "";
           position: absolute;
           top: 50%;
           left: 0;
           transform: translateY(-50%);
           width: 100%;
           height: 10px;
           background: #fff;
           background: linear-gradient(90deg,#fff 0%,#fff 70%,#525252 70%,#525252 100%);
           background-size: 120px;
           animation: animateRoad 1s linear infinite;
       }
       @keyframes animateRoad
       {
           0%
           {
             background-position: 0;
           }
           100%
           {
             background-position: -120px;
           }
       }
       .infinite:after {
           content: "";
           position: absolute;
           width: 100%;
           height: 30px;
           background: #333;
           bottom: -30px;
           transform-origin: top;
           transform: perspective(500px) rotateX(-25deg);
       }
       .shadow {
           position: absolute;
           bottom: -93px;
           left: 50%;
           width: 95%;
           transform: translateX(-50%);
           height: 60px;
           background: linear-gradient(rgba(0, 0, 0, 0.25),transparent);
       }
       .box {
           position: absolute;
           width: 100%;
           display: flex;
           justify-content:center;
           align-items: center;
           -webkit-box-reflect: below 1px linear-gradient(transparent,transparent,transparent,#004);
           animation: animateBox 1s linear infinite;
       }
       @keyframes animateBox
       {
           0% 
           {
               transform: translateX(0);
           }
           100% 
           {
               transform: translateX(-100px);
           }
       }
       .square {
           position: relative;
           width: 100px;
           height: 100px;
           background: #fff;
           transform-origin: bottom right;
           animation: animate 1s linear infinite;
       }
       @keyframes animate 
       {
           0% 
           {
               transform: rotate(0deg);
           }
           100% 
           {
               transform: rotate(90deg);
           }
       }
   </style>

   <div class="container">
       <div class="infinite">
           <div class="shadow"></div>
       </div>
       <div class="box">
           <div class="square"></div>
       </div>
   </div>
</div>
