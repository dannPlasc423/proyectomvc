<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="proyectomvc";

$con = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$con){
    die("Error" . mysqli_connect_error());
}

$correo = $_POST["correo"];
$clave = $_POST["clave"];

$consulta = mysqli_query($con, "SELECT * from usuarios where correo = '$correo' AND clave = '$clave'");

$rows = mysqli_num_rows($consulta);

if($rows = mysqli_fetch_array($consulta)){
    session_start();

    $_SESSION['usuario'] = $nombres;
    echo "<script>
    alert('Logeado correctamente');
    location.href = 'Inicio.html';
</script>";
}else{
    echo "<script>
    alert('Hay un error');
    location.href = 'login.html';
</script>";

}

mysqli_close($con);
?>