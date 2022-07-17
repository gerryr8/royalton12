    
<?php 
    session_start();

    $varsession=$_SESSION['email'];
    if($varsession == null || $varsession = ''){
    
    echo("Inicia sesión");
    header("Location: login.php");

    die();
     
    }
 
     
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resguardo de equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
 
    <script src="app.js"></script>
</head>

<body background="https://static.vecteezy.com/system/resources/previews/001/176/927/non_2x/blue-and-white-abstract-background-vector.jpg" style="color: black ;">
<div class="container mt-4">
    <div class="row">


    <h1>Administrador</h1>
    <h3>Bienvenido: <?php echo  $_SESSION['nombre'];  ?> <?php echo $_SESSION['apellido']; ?></h3>

    <a href="registro.php">Registrar Usuarios</a>
    <a href="cerrar.php">Cerrar Sesión</a>
  

    

</div>
</div>
 

    <div class="container mt-4">
        <div class="row">
                <form action="#" id="#form" method="post">

                       <span class="d-block pb-2">Firma digital aqui</span>
                       <div class="signature mb-2" style="width: 50%; height: 100px;">
                          <canvas id="signature-canvas" style="border: 1px dashed red; width: 500px; height: 100px;"></canvas>
                       </div>

                     <button type="submit" class="btn btn-success" id="send">Generar PDF</button>
                                                                                   
                </form>
            </div>
        </div>
    </div>
    <!--<script type="text/javascript">
function onFormSubmit(e) {

    const img onFormSubmit;

}

</script>
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
    <script type="text/javascript">
        document.getElementById('send').addEventListener('click', function(e){
            e.preventDefault();
            console.log('send');
           
        });
    </script>-->

     
</body>
</html>