<?php
   require "../bdcon.php";

echo "<h2>Bbdbb con PHP</h2>";
//print_r (PDO::getAvailableDrivers());

try {
    $dbh = new PDO(dsn,username,password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM clients";
    $sql1 = "INSERT INTO clients VALUES(null,'beethoven','mac madilla',34, 65657)";
    $sql2 = "SELECT ID FROM clients ORDER BY ID DESC LIMIT 1";
    

    //FORMA 1: QUERY
   /* $registers = $dbh->query($sql);
    foreach ($registers as $row) {
        echo "ID: " . $row["ID"] ;
        echo ", Name: " . $row["NAME"] ;
    }*/

    //FORMA 2: PREPARE + EXECUTE
    $stmnt = $dbh->prepare($sql);
    $stmnt->execute();

    //$registers = $stmnt->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    $registers = $stmnt->fetchAll(PDO::FETCH_OBJ);
    foreach ($registers as $row) {
       
        echo "ID: " . $row->ID;
        echo ", Name: " . $row->NAME ;
        echo"<br>";
        $contador++;
    }
    echo "<br> El numero de filas son " . $contador;

    //$dbh->query($sql1);

    $registers = $dbh->query($sql2);
    foreach ($registers as $row) {
        echo "<br>El  ultimo ID agregado es el  " . $row["ID"] ;
    }


} catch (Exception $ex){
    echo "Fallo en la conexion: " . $ex->getMessage();
}finally{
    $dbh = null;
    echo " <br>Conexion cerrada";
}