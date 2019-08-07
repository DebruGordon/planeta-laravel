<!-- hay que modificarle el isset session para que le pongamos los headers en el modelo de layouts, lo voy a dejar pero no va a funcionar con ese modelo -->

@extends ("layouts.master")

@section("contenido")

  <section class="section-home"> <!--NO TIENE NADA ESTA CLASE -->

     <button id="button-play"type="button" name="button"> PLAY </button>

  </section>

@endsection

<!-- no va a funcionar porque en el layout tenemos solo header y no hay nada en el footer, es un primer paso -->
<!-- tampoco tenemos los helpers y autoload porque no tengo la carpeta por el composer -->