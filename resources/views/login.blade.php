<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MercadoTec</title>
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <div class="contenedor">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="contenedor-login">            
            <form action="iniciar-sesion" method="POST">
                @csrf
                <div>
                    <h2>Iniciar sesión</h2>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="password">Contraseña:</label>
                    <input type="text" name="password">
                </div>

                <div class="error-login">
                    @if($errors->any())
                        <p>{{$errors->first()}}</p>
                    @endif
                </div>

                <div>
                    <input type="submit" class="btn" value="iniciar sesión">
                </div>
            </form>            
        </div>       
        <div class="recuperar-password">
            <a href="/formulario-solicitar-password">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="registro">
            <p>¿Eres nuevo en MercadoTec?</p>
            <a href="crear-cuenta" class="btn-crear-cuenta">Crear una cuenta</a>
        </div>
    </div>
</body>
</html>