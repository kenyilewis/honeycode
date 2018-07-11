@extends('master')
@section('content')
  <div class="container">
    <h1>Buzon de Mensajes</h1>
    <hr>

    <table class="tabla-mensajes">
  <thead>
    <tr class="tr-post">
      <th class="th-post fila1">Asunto</th>
      <th class="th-post">Fecha</th>
      <th class="th-post">Remitente</th>
      <th class="th-post">Accion</th>
    </tr>
  </thead>
  <tbody>
  @each('/mensajes/_card', $mensajes, 'mensaje')

  </tbody>
</table>

    {{ $mensajes->links() }}
</div>
@endsection
