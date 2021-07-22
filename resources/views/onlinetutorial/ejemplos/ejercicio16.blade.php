<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/loginAnima.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <!-- Login -->
            <div class="user signinBx">
                <div class="imgBx"><img src="{{asset('assets/img/galeria/AnimatedLogin/img1.jpg')}}" alt=""> </div>
                <div class="formBx">
                    <form action="" id="formularioLogin">
                        <h2>Sign In</h2>


                        <!-- validación nombre usuario -->
                        <div class="grupo_usuario" id="grupo_usuario">
                            <input type="text" placeholder="UserName" name="loginName" class="formulario__input">
                            
                            <p class="formulario__input-error">El usua tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras</p>
                        </div>

                        <!-- validación password -->
                        <div class="grupo_password" id="grupo_password">
                        <input type="password" placeholder="Password" name="loginPass" class="formulario__input">
                        
                        <p class="formulario__input-error">la contraseña tiene que ser de 4 a 12 dígitos</p>
                        </div>    

                        <div class="formulario_grupo formulario_grupo-btn-enviar">
                        <input type="submit" value="login" />
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                        </div>

                         <!-- mensaje de Error rellenar campos -->
                         <div class="formulario__mensaje" id="formulario__input-error">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>

                         

                        <p class="signup">don't have an account? <a href="#" onclick="toggleForm();">Sign up.</a></p> 
                    </form>
                </div>
            </div>

            <!-- Register -->
            <div class="user signupBx">
                <div class="formBx">
                    <form action="" id="formularioRes">
                        <h2>Create an Account</h2>
                         <!-- validación nombre usuario -->
                         <div class="grupo_usuarioReg" id="grupo_usuarioRed">
                        <input type="text" placeholder="UserName" name="regname" class="formulario__input">
                        <p class="formulario__input-error">El usua tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras</p>
                         </div>

                          <!-- validación email -->
                        <div class="grupo_emailRed" id="grupo_emailRed">
                        <input type="text" placeholder="Email" class="formulario__input" name="regemail">
                        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guion y guion bajo</p>
                        </div>

                        <!-- validación password -->
                        <div class="grupo_passRed" id="grupo_passRed">
                        <input type="password" placeholder="Create Password" name="regpass" class="formulario__input" id="password1">
                        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos</p>
                        </div> 
                        
                        
                        <!-- validación password confirmacion -->
                        <div class="grupo_passRed2" id="grupo_passRed2">
                        <input type="password" placeholder="Confirm Password" name="regpass2" class="formulario__input" id="password2">
                        <p class="formulario__input-error">Ambas Contraseñas deben ser iguales.</p>
                        </div>    


                       
                        <input type="submit" value="Sign Up" />
                          <!-- mensaje de exito rellenar campos -->
                          <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                          <!-- mensaje de exito rellenar campos -->
                          <p class="formulario__mensaje-exito" id="formulario__mensaje-exito2">Formulario enviado exitosamente!</p>

                         <!-- mensaje de Error rellenar campos -->
                         <div class="formulario__mensaje" id="formulario__input-error">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>
                        <!-- mensaje de Error rellenar campos -->
                        <div class="formulario__mensaje" id="formulario__input-error2">
                            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>
                       


                        <p class="signup">Already have an account? <a href="#" onclick="toggleForm();">Sign in.</a></p> 
                    </form>
                </div>
                <div class="imgBx"><img src="{{asset('assets/img/galeria/AnimatedLogin/img2.jpg')}}" alt=""> </div>
            </div>

        </div>
    </section>

    <script src="{{asset('assets/js/onlinetutorial/loginAnima.js')}}"></script>
</body>
</html>