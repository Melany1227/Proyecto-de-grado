<?php
include("con_db.php");

if (isset($_POST['register'])){

    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $pwd = trim($_POST['pwd']);
        $consulta = "INSERT INTO datos(nombre, email, pwd) VALUES ('$name','$email','$pwd')";
        $resultado = mysqli_query($conex,$consulta);

        if($resultado){
            ?>
            <h3 class="ok">¡Te has registrado correctamente!</h3>
            <?php
        } else{
            ?>
            <h3 class="bad">¡Ha ocurrido un error!</h3>
            <?php
    }    } else{
            ?>
            <h3 class="bad">Por favor complete los campos</h3>
            <?php
        }
}

?>