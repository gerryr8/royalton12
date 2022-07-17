<?php include "dataseconect.php";


$departamento = $_POST['departamento'];
$nombres = $_POST['nombres'];
$puesto = $_POST['puesto'];
$n_anfitrion = $_POST['n_anfitrion'];


$consulta = "INSERT INTO resguardos (departamento, nombres, puesto, n_anfitrion) VALUES ('$departamento','$nombres','$puesto','$n_anfitrion')";


$query = mysqli_query($conn, $consulta);

if($query){
    echo "correcto";

}else{
    echo "incorrecto";


}

?>


























