
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista prueba</title>
</head>
<body>
    Hola {{$nombreSiu}}

    {{--Comentario legible--}}
 {{--IF--}}

 {{$users=3 }}
 @if( $users === 1)
  Solo hay un usuario!
  @elseif ($users) > 1)
  Hay muuchos usuarios!
  @else
  No hay nadie <br>
  @endif

  {{$us='Choin eli'}}
  @if( $us === 'Choin eli')
  <h1>El usuario es {{$us}} </h1>
  @else
  No hay ningun usuario :(
  @endif

  {{--FOR--}}
  @for ($i = 0; $i <  10; $i++)
  
  @endfor
  El valor actual es: {{ $i }}

  
  {{--WHILE--}}
  @php($j = 1)
  @while($j < 7)
        <p>{{$j}}</p>
        @php($j++)
  @endwhile

</body>
</html>

