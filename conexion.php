<?php
diferencia();

function diferencia(){
    if(isset($_POST['enviar'])){
        insertar();
    }
    if(isset($_POST['eliminar'])){
        eliminar();
    }
}
function conectar(){
    try{
        $conex = new PDO("mysql:host=localhost;dbname=registro","ivan","futbol10");
    } catch(PDOException $ex){
        die('conexión fallida: error ' . $ex->getMessage());
    }
    return $conex; 
}

function consulta($query){
    $conn = conectar();
    $records = $conn->prepare($query);
    $records->execute(); 
    return $records;
}

function insertar(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $correo = $_POST['correo'];

    $consulta = "INSERT INTO clientes(id, nombre, apellido, correo)
    VALUES ('$id','$nombre', '$apellido','$correo')";
    $resultado = consulta($consulta);
    if(!$resultado){
        echo '<script>alert("Registro incorrecto")</script>';
        header("Location: Registro.php");
    } else{
        header("Location: Registro.php");
    }
}

function eliminar(){
    $id = $_POST['id'];

    $consulta = "DELETE FROM clientes WHERE id='$id'";
    $resultado = consulta($consulta);
    

    header("Location: Registro.php");
}

?>