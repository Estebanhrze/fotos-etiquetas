<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Fotos</title>
</head>
<body>
  <h1>Listado de Fotos</h1>

  <a href="{{ route('photos.create') }}">➕ Agregar nueva foto</a>
  <hr>

  @foreach($photos as $photo)
    <div style="margin-bottom: 20px;">
      <h3>{{ $photo->title }}</h3>
      <img src="{{ $photo->url }}" alt="{{ $photo->title }}" width="200"><br>

      <p><strong>Etiquetas:</strong>
        @foreach($photo->tags as $tag)
          <span style="border:1px solid #000; padding:2px 5px; margin-right:5px;">{{ $tag->name }}</span>
        @endforeach
      </p>
    </div>
  @endforeach
</body>
</html>
