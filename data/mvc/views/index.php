<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
</head>
<body>
    <h1>Lista Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Detalle usuario</th>
        </tr>
        <?php foreach($arrusers as $user){?>
            <tr>
                <td><?php echo $user[0]?></td>
                <td><?php echo $user[1]?></td>
                <td><a href="?method=show&id=<?php echo $user[0]?>">Ver Usuario</a></td>
                
            </tr>
        
        
        <?php }?>
        
    </table>
    
</body>
</html>