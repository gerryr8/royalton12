<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Registro de usuarios</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
    <div class="container mt-4">
    <div class="row">

    <form action="insert_register.php" method="post"">
        <input type="name" placeholder="Nombre" required name="name" style="display: block; margin-bottom:10px;">
        <input type="name" placeholder="Apellido" required name="lastname" style="display: block; margin-bottom:10px;">
        <input type="email" placeholder="Correo" required name="email" style="display: block; margin-bottom:10px;">
        <input type="password" placeholder="Contraseña" required name="password" style="display: block; margin-bottom:10px;">
        <h3>Permisos</h3>
        <select required name="role" style="display: block; margin-bottom:10px;">
            <option value="1">Administrador</option>
            <option selected value="2">Usuario</option>
        </select>
        <input type="submit" value="Agregar" style="display: block; margin-bottom:10px;">
    </form>
</div>
</div>
    
</body>
</html>