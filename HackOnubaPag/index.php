<?php include_once 'includes/templates/header.php';?>
  <section class="seccion contenedor">
    <h2>Conferencia de ciberseguiridad desde HUELVA para el mundo</h2>
    <p>
      Se hace un gran esfuerzo para acercar la ciberseguridad a la población y a la industria
      de Huelva con la intencion de llegar a la conciencienciación,
      a la calidad en de los procesos de gestión y de networking

    </p>
  </section>
  <section class="programacion">
    <div class="contenedor-imagen">

    </div >
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-conferencia">
          <h2>Programa de la Conferencia</h2>
          <nav class="menu-programa">
            <a href="#talleres">Talleres</a>
            <a href="#charlas">Charlas</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Hacking Web</h3>
              <p>17:00h</p>
              <p>12 de junio</p>
              <p>Rebeca Chang</p>
            </div>
            <div class="detalle-evento">
              <h3>Análisis forense dispositivos móviles</h3>
              <p>19:00h</p>
              <p>12 de junio</p>
              <p>Emilio Alzamora</p>
            </div>
            <a href="agenda.php" class="button float-right">Ver todo</a>
          </div>
          <div id="charlas" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>SOC para todos</h3>
              <p>10:00h</p>
              <p>12 de junio</p>
              <p>Pat Devil</p>
            </div>
            <div class="detalle-evento">
              <h3>Seguridad para empresas</h3>
              <p>12:00h</p>
              <p>12 de junio</p>
              <p>Pedro Pedroso</p>
            </div>
            <a href="agenda.php" class="button float-right">Ver todo</a>
          </div>
        </div>
      </div>

    </div>

  </section>
  <section class="conferenciantes contenedor seccion">
    <h2>Conferenciantes</h2>
    <ul class="lista-conferenciantes">
      <li>
        <div class="invitado">
          <img src="img/Rebeca1.jpg" alt="Rebeca">
          <p>Rebeca Chang</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/Emilio2.jpg" alt="Emilio">
          <p>Emilio Alzamora</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/Carlos3.jpg" alt="Carlos">
          <p>Carlos Enríquez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/Juan4.jpg" alt="Juan">
          <p>Juan Madreño</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/Pedro5.jpg" alt="Pedro">
          <p>Pedro Pedroso</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/Pat6.jpg" alt="Pat">
          <p>Pat Devil</p>
        </div>
      </li>
    </ul>

  </section>


  <section class="precios seccion">
    <h2>Entradas</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precios">
            <h3>Entrada de un día</h3>
            <p class="numero">Gratis</p>
            <ul>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">La organizacion se reserva el derecho de admision</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Todas las Conferencias segun aforo</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Talleres Segun Aforo</li>
            </ul>
            <a href="registro.php" class="button hollow">Registro</a>
          </div>
        </li>
        <li>
          <div class="tabla-precios">
            <h3>Entrada de Evento</h3>
            <p class="numero">Gratis</p>
            <ul>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">La organizacion se reserva el derecho de admision</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Todas las Conferencias segun aforo</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Talleres Segun Aforo</li>
            </ul>
            <a href="registro.php" class="button hollow">Registro</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div id="mapa" class="mapa"><iframe width="100%" height="500" style="border:0" Loading="lazy" allowfullscreen
src=""></iframe></div>
  <section class="seccion">
    <h2>Opiniones</h2>
    <div class="opiniones contador clearfix">
      <div class="opinion">
        <blockquote>
          <p>Jamás había asistido a una conferencia tan divertida y con tantas oportunidades</p>
          <footer class="info-opinion">
            <img src="img/Elena.jpg" alt="Imagen Elena">
            <cite>Elena Escribano <span>/CISO en Prelux</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="opinion">
        <blockquote>
          <p> Vine Recomendado y no me arrepiento, volveré seguro y
            con amigos</p>
          <footer class="info-opinion">
            <img src="img/Dani.jpg" alt="Imagen Dani">
            <cite>Dani Díaz <span>/Analista SOC n3 en secure</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>
  <section class="seccion">
    <h2>Solo queda</h2>
    <div class="cuenta-atras contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>días</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>

      </ul>
    </div>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>

