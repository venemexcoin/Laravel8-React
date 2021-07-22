@push('title_base')
    Capcha
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    align-items:center;
    justify-content: center;
    min-height: 100vh;
    background: #4db2ec;
}
.wrapper {
    width: 485px;
    background: #fff;
    border-radius: 10px;
    padding: 22px 30px 40px;
} 
.wrapper header {
    color: #4db2ec;
    font-size: 33px;
    font-weight: 500;
    text-align: center;
} 
.wrapper .captcha-area{
    display: flex;
    height: 65px;
    margin: 30px 0 20px;
    align-items: center;
    justify-content: space-between;
}
.captcha-area .captcha-img{
    height: 100%;
    width: 345px;
    user-select: none;
    position: relative;
    background: #000;
    border-radius: 5px;
}
.captcha-img img{
    width: 100%;
    height: 100%;
    opacity: 0.95;
    object-fit: cover;
    border-radius: 5px;
}
.captcha-img .captacha {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 100%;
    color: #fff;
    font-size: 35px;
    letter-spacing:10px;
    text-align: center; 
    transform: translate(-50%, -50%);
    text-shadow: 0 0 2px #b1b1b1;
    font-family: 'Noto Serif', serif;
}
.wrapper button {
    border: none;
    outline: none;
    color: #fff;
    cursor: pointer;
    background: #4db2ec;
    border-radius: 5px;
}
.captcha-area .reload-btn {
    width: 75px;
    height: 100%;
    font-size: 25px;
}
.captcha-area .reload-btn i {
    transition: transform 0.3s ease;
}
.captcha-area .reload-btn:hover i {
    transform: rotate(15deg);
}
.wrapper .input-area {
    height: 60px;
    width: 100%;
    position: relative;
}
.input-area input {
    height: 100%;
    width: 100%;
    outline: none;
    font-size: 20px;
    padding-left: 20px; 
    border-radius: 5px;
    border: 1px solid #bfbfbf;
}
.input-area input:is(:focus, :valid) {
    border: 2px solid #4db2ec;
}
.input-area .check-btn {
    position: absolute;
    right: 7px;
    top: 50%;
    font-size: 17;
    height: 45px;
    padding: 0 20px;
    opacity: 0;
    pointer-events: none;
    transform: translateY(-50%);
}
.input-area input:valid + .check-btn{
    opacity: 1;
    pointer-events: auto;
}
.wrapper .status-text {
    display: none;
    font-size: 18px;
    text-align: center; 
    margin: 20px 0 -5px 0;
}
</style>
@endpush
<div>
    <div class="wrapper">
        <header>Captcha in JavaScript</header>
        <div class="captcha-area">
            <div class="captcha-img">
                <img src="{{asset('assets/img/galeria/capcha/captcha-bg.png')}}" alt="Imagen Fondo Capcha">
                <span class="captacha"></span>
            </div>
            <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
        </div>
        <form action="#" class="input-area">
            <input 
            type="text"
            placeholder="Enter Captcha"
            required
            maxlength="6" 
            > 
            <button class="check-btn">Check</button>
        </form>
        <div class="status-text"></div>
    </div>    
</div>
@push('scripts')
<script>

    //storing all catcha characters in array
    const captcha = document.querySelector(".captacha"),
    reloadBtn = document.querySelector(".reload-btn"),
    inputField = document.querySelector("input"),
    checkBtn = document.querySelector(".check-btn"),
    statusText = document.querySelector(".status-text");

    //storing all captcha characters in array
    let allCharacters = ['A','B','C','E','F','G','H','I','J','K','L','M','N','O',
                         'P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d',
                         'e','f','g','h','i','j','k','l','m','n','o','p','q','r','s',
                         't','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9];
     
    function getCaptcha(){
        for(var i = 0; i < 6; i++) { //getting 6 rondom chacters from thr array
            let randomChar = allCharacters[Math.floor(Math.random() * allCharacters.length)];
            captcha.innerText += ` ${randomChar}`; //passing 6 randon characters inside captcha innerText
        }
    }   

    getCaptcha(); 

    reloadBtn.addEventListener('click', () => {
        captcha.innerText = '';
        getCaptcha();
    });

    checkBtn.addEventListener('click', (e) => {
        e.preventDefault();
        // adding space after each value of user entered captcha bacause I've added spaces wile generating catcha
        let inputVal = inputField.value.split('').join(' ');

            statusText.style.display = 'block';

        if(inputVal == captcha.innerText){
            statusText.style.color = '#4db2ec'
            statusText.innerText = "¡Lindo! No pareces ser un robot.";
             
            setTimeout(() => {
                statusText.style.display = '';
                inputField.value = '';
                captcha.innerText = '';
                getCaptcha();
            },4000)
        }else {
            statusText.style.color = '#ff0000'
            statusText.innerText = "Captch not Matched. Please try again!";
            setTimeout(() => {
                statusText.style.display = '';
                inputField.value = '';
                captcha.innerText = '';
                getCaptcha();
            },4000)
        }
    });

                    


</script>

@endpush
