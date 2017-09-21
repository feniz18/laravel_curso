HOLA AMIGITOS
<br><br>
<hr>
<h1>{{$articulo->titulo}}</h1>
<hr>
{{$articulo->contenido}}
<hr>
{{$articulo->usuario->nombre}}| {{$articulo->categoria->name}} |

@foreach ($articulo->tags as $tag)

  {{$tag->nombre}}

@endforeach
