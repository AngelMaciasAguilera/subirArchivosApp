<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos pdf e imagenes</title>
</head>
<body>
    <form action="{{ url('subir')}}" method= "post" enctype="multipart/form-data">
        @csrf <!-- seguridad, consultas preparadas de SQL -->
        <input type="file" name="file" >
        <button type="submit">Subir</button>
        
    </form>
</body>
</html>