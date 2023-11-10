<?php

require "../bdcon.php";
try {
    $id = null;
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $calle = $_POST['calle'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];

    $dbh = new PDO(dsn,username, password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // Usar bindParam para insertar datos en la tabla
    $stmt = $dbh->prepare("INSERT INTO clients(ID,NAME,ADRESS,AGE,TELEPHONE, FECHA) VALUES(:id,:name,:adress,:edad,:telefono, fecha:)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $nombre);
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':adress', $calle);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->execute();

    // Usar bindValue para insertar datos en la tabla
    $stmt = $dbh->prepare("INSERT INTO clients(ID,NAME,ADRESS,AGE,TELEPHONE) VALUES(?,?,?,?,?)");
    $stmt->bindParam(1, $id);
    $stmt->bindValue(2, $nombre);
    $stmt->bindValue(3, $edad);
    $stmt->bindValue(4, $calle);
    $stmt->bindValue(5, $telefono);
    $stmt->bindValue(6, $fecha);
    $stmt->execute();

    echo "Se ha insertado correctamente";

    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>