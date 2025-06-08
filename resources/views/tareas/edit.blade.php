<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Editar Tarea</h1>

    <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ $tarea->titulo }}" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required>{{ $tarea->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn-igual">Guardar cambios</button>
        <a href="{{ route('tareas.index') }}" class="btn-volver">← Volver al listado</a>
    </form>
</body>
</html>
