<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/loginPopup.css')}}">
</head>
<body>
    <div class="container">
        <div class="center">
            <button id="show-login">Login</button>
        </div>
        <div class="popup">
            <div class="close-btn">&times;</div>
            <div class="form">
                <h2>Log in</h2>
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Enter email">
                </div>
                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter password" />
                </div>
                <div class="form-element">
                    <input type="checkbox" id="remember-me" />
                    <label for="remenber-me">Remember me</label>
                </div>
                <div class="form-element">
                    <button>Sign in</button>
                </div>
                <div class="form-element">
                    <a href="#">Forgot password</a>
                </div>
            </div>
          </div>
        </div>
    

    <script src="{{asset('assets/js/onlinetutorial/loginPopup.js')}}"></script>
</body>
</html>