<?php
    require "../bdcon.php";

    echo "<h2>BBDD Sentencias";


    /*
        Preparar la sentencia -> prepare:
            -named placeholder : nomvariable
            quiestion mark placeholder
            */

    try{
        $dbh = new PDO(dsn,username, password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sentencia con placeholders y valores directos
        $sql = "INSERT INTO clients(ID,NAME,ADRESS,AGE,TELEPHONE) VALUES(:id,:name,:adress,:edad,:telefono)";
        //FORMA B :INTERROGACION
        $sql2 = "INSERT INTO clients(ID,NAME,ADRESS,AGE,TELEPHONE) VALUES(?,?,?,?,?)";

       $statement = $dbh ->prepare($sql2);

       //Ocion 1: bindParam -> variable es una referencia.
       $id = null;
       $nombre= 'Juan';
       $direccion='Calle falsa 123';
       $edad=45;
       $telefono=67890123;
       /*
       $statement->bindParam(':id',$id);
       $statement->bindParam(':name',$nombre);
       $statement->bindParam(':adress',$direccion);
       $statement->bindParam(':edad',$edad); 
       $statement->bindParam(':telefono',$telefono); 
*/
/*
// bindValue -> asocio los valores
    $statement->bindValue(':id',$id);
    $statement->bindValue(':name',$nombre);
    $statement->bindValue(':adress',$direccion);
    $statement->bindValue(':edad',$edad); 
    $statement->bindValue(':telefono',$telefono); */

    //QUESTION MARK PLACEHOLDER
    $statement->bindValue(1,$id);
    $statement->bindValue(2,$nombre);
    $statement->bindValue(3,$direccion);
    $statement->bindValue(4,$edad); 
    $statement->bindValue(5,$telefono); 

    $edad = 99;

 $statement-> execute();

       echo "<h4> Inserccion ejecutada</h4>";
       //Opcion 2: bindValue -> valor pasado por referencia
    


    } catch (Exception $ex){
        echo "Fallo en la conexion: " . $ex->getMessage();
    }finally{
        $dbh = null;
        echo " <br>Conexion cerrada";
    }
