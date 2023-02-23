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
            <form action="solicitar-password" method="POST">
                @csrf
                <div>
                    <h2>Cambiar Contraseña</h2>
                </div>
                <div>
                    <label for="nombre">Por favor introduce tu correo y tu nueva contraseña:</label>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="password">Nueva contraseña:</label>
                    <input type="text" name="nuevo_password">
                </div>
                <div>
                    <input type="submit" class="btn" value="Actualizar Contraseña">
                </div>                
            </form>            
        </div>        
    </div>
</body>
</html>