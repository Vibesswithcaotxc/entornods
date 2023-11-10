<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Clientes</title>
</head>
<body>
    <h1>Formulario de Clientes</h1>
    <form method="post" action="bdformulario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="calle">Calle:</label>
        <input type="text" name="calle" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>