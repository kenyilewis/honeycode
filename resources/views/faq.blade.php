@extends('master')

@section('content')
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 text-center">FAQ

    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">FAQ</li>
    </ol>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿QUE ES HONEYCOMB?</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            HONEYCOMB es una red social donde podes encontrar tu complemento para tus proyectos de programacion. Podes compartir tus ideas, ayudar a otros colegas y formar grupos para trabajos grandes.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿COMO ME UNO A HONEYCOMB?
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            Simplemente entra a la pagina de registro y registrate.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿CUANTO CUESTA LA SUBSCRIPCION?</a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
            HONEYCOMB es gratis. Es una red social para ayudar y trabajar en conjunto con otros programadores.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingFour">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">¿COMO ME CONTACTO CON OTROS PROGRAMADORES?</a>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="card-body">
            Registrate y busca a quien quieras filtrando por el lenguaje de programacion que necesitas.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingFive">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">¿COMO AYUDO A LOS DEMAS?</a>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="card-body">
            Entra a la seccion de preguntas y respuestas y comparti tu conocimiento con los demas.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingSix">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">¿PUEDO CONSEGUIR TRABAJO EN HONEYCOMB?</a>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="card-body">
            HONEYCOMB no es una bolsa de trabajo. Pero podes buscar a otros programadores o pueden ellos buscarte para ayudarlos en sus proyectos y trabajar junto a ellos.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingSeven">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Pregunta 7</a>
          </h5>
        </div>
        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
