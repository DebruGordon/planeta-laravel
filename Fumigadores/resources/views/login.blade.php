<!-- igual que index, tiene un header particular que hay que editar para el modelo, asi que no va  funcionar. es la maqueta de como seria -->

@extends ("layout.master")

@section("contenido")

  <section class="body-section">

    <h2>INICIAR SESIÓN</h2>

    <form class="formulario" action="" method="post"> <!-- la class formulario no tiene nad en css -->

      <div class="campos">  <!-- cambiar la class fondo-campo, botones-login, id recordarme, id button y id button-olvide por botones de bootstrap -->

        <input id="email" class="fondo-campo" type="email" name="email" value="" placeholder="Email" required>

        <input id="password" class="fondo-campo" type="password" name="password" value="" placeholder="Password" required>

      </div>

        <label id="recordarme">
          <input type="checkbox" name="rem"  value="r"> Recordarme
        </label>

      <div class="botones-login">

        <button id="button" type="submit" name="button"> Ingresar </button>

        <a id="button-olvide" type="button" href="olvidePass.php" name="button"> Olvide mi contraseña </a>

      </div>
    </form>
  </section>



@endsection