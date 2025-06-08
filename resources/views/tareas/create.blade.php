<!DOCTYPE html>
<html>
<head>
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Crear nueva tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <div class="botones">
            <button type="submit" class="btn-igual">Guardar</button>
            <a href="{{ route('tareas.index') }}" class="btn-volver">← Volver al listado</a>
        </div>
    </form>

</body>
</html>
