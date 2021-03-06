<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>SISTEMA PQRS</title>
</head>
<header class="site-header">
    <h1 class="logo"><a href="">merkar</a></h1>

        <nav class="full-menu">
            <ul>

                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Carrito</a></li>
                <li class="miCuenta"><a href="#">Mi Cuenta</a></li>
            </ul>
        </nav>
</header>
<body>
    <div class="contenedor-formulario">  
        <div class="wrap">
            <!-- formulario -->
            <form action="" class="formulario" method="POST">
                <div>
                    <h2 class="h2">SISTEMA DE ATENCIÓN VIRTUAL PQRS</h2>
                    <div class="input-group">
                        <label for="tipo_de_documento">Tipo de identificación: </label>
                        <select class="select1" name="tipo_de_documento" id="tipo_de_documento">       
                            <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="NIT">NIT</option>
                        </select>
                    </div>
        
                    <div class="input-group">
                        <label for="numero_de_identificacion">Número de identificación: </label>    
                        <input type="text" id="numero_de_identificacion" name="numero_de_identificacion">
                    </div>
        
                    <div class="input-group">
                        <label for="nombres">Nombres: </label>
                        <input type="text" id="nombres" name="nombres">
                    </div>
        
                    <div class="input-group">
                        <label for="apellidos">Apellidos: </label>
                        <input type="text" id="apellidos" name="apellidos">
                    </div>
        
                    <div class="input-group">
                        <label for="direccion">Dirección: </label>
                        <input type="text" id="direccion" name="direccion">
                    </div>
        
                    <div class="input-group">
                        <label for="correo">Correo: </label>
                        <input type="email" id="correo" name="correo">
                    </div>
        
                    <div class="input-group">
                        <label for="telefono">N° Telefono</label>
                        <input type="text" id="telefono" name="telefono">
                    </div>
        
                    <div class="input-group">
                        <label for="pqrs">Tipo de solicitud: </label>
                        <select class="select1" name="tipo_de_solicitud" id="tipo_de_solicitud">
                            <option value="">Petición</option>
                            <option value="">Queja</option>
                            <option value="">Reclamo</option>
                            <option value="">Sugerencia</option>
                        </select>
                    </div>
        
                    <div class="input-group">
                        <label for="detalle">Detalle: </label>
                        <textarea class="textarea" name="detalle" id="detalle" cols="41" rows="5" maxlength="1000"></textarea>
                    </div>
        
                    <div class="input-group checkbox">
                        <input type="checkbox" id="checkbox" name="checkbox">
                        <label for="checkbox">Acepto terminos y condiciones</label>
                    </div>
        
                    <div class="botoncenter">
                        <input class="boton" type="submit" value="RADICAR" name="register">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    include("registrar.php");
    ?>
</body>
</html> 