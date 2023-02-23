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
            <form action="crear-cuenta" method="POST">
                <div>
                    <h2>Crea una cuenta</h2>
                </div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre">
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="password">Contraseña:</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input type="submit" class="btn" value="Crear cuenta">
                </div>
                @csrf
            </form>            
        </div>        
    </div>
</body>
</html>