<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Foto</title>
</head>
<body>
  <h1>Agregar nueva foto</h1>

  <form method="POST" action="{{ route('photos.store') }}">
    @csrf

    <label for="title">Título:</label>
    <input type="text" name="title" id="title" placeholder="Título" required><br><br>

    <label for="url">URL de la imagen:</label>
    <input type="text" name="url" id="url" placeholder="URL de la imagen" required><br><br>

    <label>Etiquetas:</label><br>
    @foreach($tags as $tag)
      <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
      {{ $tag->name }}<br>
    @endforeach

    <br>
    <button type="submit">Guardar</button>
  </form>

  <br>
  <a href="{{ route('photos.index') }}">← Volver al listado</a>
</body>
</html>
