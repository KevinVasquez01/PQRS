<?php
    include("con_db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['tipo_de_documento']) >= 1 &&
    strlen($_POST['numero_de_identificacion']) >= 1 && 
    strlen($_POST['nombres']) >= 1 &&
    strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['telefono']) >= 1 &&
    strlen($_POST['tipo_de_solicitud']) >= 1 &&
    strlen($_POST['detalle']) >= 1) {

        $tipo_de_documento = trim($_POST['tipo_de_documento']);
        $numero_de_identificacion = trim($_POST['numero_de_identificacion']);
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $direccion = trim($_POST['direccion']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $tipo_de_solicitud = trim($_POST['tipo_de_solicitud']);
        $detalle = trim($_POST['detalle']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO formulario(id_type, id_ced, nombres, apellidos, direccion, correo, telefono, tipo_sol, detalle, fecha_reg) VALUES ('$tipo_de_documento','$numero_de_identificacion','$nombres','$apellidos','$direccion','$correo','$telefono','$tipo_de_solicitud','$detalle', '$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="">¡Te has inscrito correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="">¡Ups ha ocurrido un error!</h3>
            <?php
        }
 }else   {
    ?>
    <h3 class="">¡Por favor complete los campos!</h3>
    <?php    
 }
}

?>