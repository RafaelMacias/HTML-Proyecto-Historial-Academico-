<?php

include('Conectar.php');
session_start();
 /*
if(isset($_POST['Login'])){
    $user = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    $sql = "SELECT Cuenta, Contraseña FROM Alumno WHERE Cuenta='$user' and Contraseña='$pass'";
    $consulta = pg_query($sql) or die('Fallo');
    if(pg_fetch_array($consulta)>0){
        $row=pg_fetch_array($consulta);
        $_SESSION['Cuenta']=$row['Cuenta']. '<p>';
        echo '<script> window.location="Historial.php";</script>';

    }
}
*/




$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
$sql = "SELECT * FROM Alumno WHERE Cuenta='$user' and Contraseña='$pass'";
$con=pg_connect("host='localhost' dbname='Base de Datos Registro' port='5432' user='postgres' password='killerag3'")
        or die ("No se pudo conectar");
$consulta = pg_query($con,$sql) or die("Fallo consulta");
$verificar = pg_fetch_array($consulta);
if ($verificar["Cuenta"]==$user && $verificar["Contraseña"] == $pass) {
    $query = "SELECT * FROM Alumno WHERE Cuenta='$user'";
    $busqueda = pg_query($con,$query);
    $registro = pg_fetch_array($consulta);
    $_SESSION["Cuenta"] = Cuenta;
    $_SESSION["Contraseña"] = Contraseña;
    
    header('Location: ../PHP/Historial.php');
} else {
    
    header('Location: ../index.html');
}
?>