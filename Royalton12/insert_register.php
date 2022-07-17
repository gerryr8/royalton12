<?php 

include "dataseconect.php";

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

$insert="INSERT INTO usuarios (nombre, apellido, email, pass, rol) VALUES ('$name', '$lastname' , '$email', '$password',  '$role')";

$check_user="SELECT * FROM usuarios WHERE email='$email'";

$execute=mysqli_query($conn, $check_user);

$row=mysqli_fetch_array($execute);

if(isset($row)){
    echo("este correo ya existe");
}else{
    $execute=mysqli_query($conn, $insert);

    echo("correcto");
}



?>