<?php
session_start();
include("Conectar.php");
if(isset($_SESSION['usuario'])){
    echo '<script> window.location="Historial.php"; </script>';
}
?>



<html>
    <head>
            <meta charset="utf-8">
            <title>Historial Academico</title>
            <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
            <link rel="stylesheet" href="../CSS/estilos.css">
    </head>
       <body>
            <div class="principal">

           <header>
                <div>
                        <img src="../img/logoUnah.png" width="70"alt="Logotipo">
                </div>
                
           </header>
           <center>
                <nav>
                        <ul>
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a href="#">Historial</a></li>
                            <li><a  href="../login/Login.html">Login</a></li>
                            <li style="float:right"><a class="active" href="#about">Salir</a></li>
                        </ul>
                </nav>
                <form action="ValidarUsuario.php" method="POST">
                    <div class="principal">
                            <h1>Ingrese sus Datos</h1>
           <table>
               <tr>
                   <td>
                       <label for="usuario">Usuario</label>
                       <input type="text" placeholder="Escribe tu usuario" name="usuario" id="usuario">
                   </td>
               </tr>
               <tr>
                    <td>
                        <label for="contraseña">Contraseña</label>
            
                        <input type="password"  placeholder="Escribe tu contraseña" name="contraseña" id="contraseña">
                    </td>
                </tr>
                <tr>
                <td><center><input type="submit" value="Entrar" name"Login"></center></td>
                </tr>
           </table>
                </form>
            </center>
        </div>

        </body>
</html>