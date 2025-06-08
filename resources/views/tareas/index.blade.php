<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Mis Tareas</h1>

    <a href="{{ route('tareas.create') }}" class="btn-enlace">Crear nueva tarea</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th class="col-titulo">Título</th>
                <th class="col-descripcion">Descripción</th>
                <th class="col-estado">Estado</th>
                <th class="col-acciones">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td class="text-center">{{ $tarea->completada ? 'Completada' : 'Pendiente' }}</td>
                    <td class="text-center">
                        <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>

                        @if (!$tarea->completada)
                            <form action="{{ route('tareas.update', $tarea->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit">Marcar como completada</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

</body>
</html>
