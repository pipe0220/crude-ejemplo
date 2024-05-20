<!DOCTYPE html>
<html>
<head>
    <title>Crear Camionero</title>
</head>
<body>
    <h1>Crear Camionero</h1>

    <form action="{{route('create.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Ingrese el nombre
            <br>
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            Ingrese la poblacion
            <br>
            <input type="text" name="poblacion">
            <br>
        </label>
        <label>
            Ingrese el telefono
            <br>
            <input type="text" name="telefono">
            <br>
        </label>
        <label>
            Ingrese la direccion
            <br>
            <input type="text" name="direccion">
            <br>
        </label>
        <label>
            Ingrese el salario
            <br>
            <input type="text" name="salario">
            <br>
        </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>
