<?php include_once 'includes/templates/header.php';?>
  <section class="seccion contenedor">
    <h2>Registro de Usuarios</h2>
    <form id="registro" class="registro" action="validar.php" method="post">
      <div id="datos_usuario" class="registro caja clearfix">
        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" autocomplete="given-name">
        </div>
        <div class="campo">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido" autocomplete="family-name">
        </div>
        <div class="campo">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Tu Email" autocomplete="off">
        </div>
        <div id="error"></div>
      </div>
      <div id="paquetes" class="paquetes">
        <h3>Elige la cantidad de Entradas</h3>
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precios">
              <h3>Entrada de un día (12-jun)</h3>
              <p class="numero">Gratis</p>
            <ul>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">La organizacion se reserva el derecho de admision</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Todas las Conferencias segun aforo</li>
              <li><img src="img/icons8-emoji-de-marca-de-verificación-48.png" alt="check">Talleres Segun Aforo</li>
            </ul>
              <div class="orden">
                <label for="entrada_dia">Número de Entradas</label>
                <input type="number" min="0" id="entrada_dia" size="3" name="ent_dia" placeholder="0">
              </div>
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
              <div class="orden">
                <label for="entrada_completa">Número de Entradas</label>
                <input type="number" min="0" id="entrada_completa" size="3" name="ent_event" placeholder="0">
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div id="eventos" class="eventos clearfix">
        <h3>Elije los talleres a los que quieres asistir</h3>
        <div class="caja">
          <div id="12-junio" class="contenido-dia clearfix">
            <h4>12 de junio</h4>
            <div>
              <p>Talleres</p>
              <label><input type="checkbox" name="registro" id="taller_01" value="taller_01"><time>17:00</time> taller_01 Hacking Web</label>
              <label><input type="checkbox" name="registro" id="taller_02" value="taller_02"><time>19:00</time> taller_02 Analisis forense de dispositivos moviles</label>
            </div>
            <div>
              <p>Charlas</p>
              <label><input type="checkbox" name="registro" id="charla_01" value="charla_01"><time>10:00</time> charla_01 SOC para todos</label>
              <label><input type="checkbox" name="registro" id="charla_02" value="charla_02"><time>12:00</time> charla_02 Seguridad para empresas</label>
            </div>
          </div>
        </div>
        <div class="caja">
          <div id="13-junio" class="contenido-dia clearfix">
            <h4>13 de junio</h4>
            <div>
              <p>Talleres</p>
              <label><input type="checkbox" name="registro" id="taller_03" value="taller_03"><time>17:00</time> taller_03 Hacking en entornos industriales</label>
              <label><input type="checkbox" name="registro" id="taller_04" value="taller_04"><time>19:00</time> taller_04 Proteccion contra ransomware</label>
            </div>
            <div>
              <p>Charlas</p>
              <label><input type="checkbox" name="registro" id="charla_03" value="charla_03"><time>10:00</time> charla_03 Seguridad informatica en procesos industriales</label>
              <label><input type="checkbox" name="registro" id="charla_04" value="charla_04"><time>12:00</time> charla_04 Un informatico para todo</label>
            </div>
          </div>
        </div>
      </div><!--fin eventos-->
      <div id="resumen" class="resumen clearfix">
        <h3>Pago y resumen de pedido</h3>
        <div class="caja clearfix">

            <input type="button" id="btnCalcular" class="button" value="Ver pedido">
          </div>
          <div class="total">
            <p>Resumen:</p>
            <div id="lista-productos">

            </div>
            <p>Total:</p>
            <div id="suma-total">

            </div>
            <input type="hidden" name="total_pedido" id="total_pedido" value="total_pedido">
            <input id="btnRegistro" type="submit" class="button" value="Registrar">
          </div>
        </div>
      </div>
    </form>
  </section>
  <?php include_once 'includes/templates/footer.php'; ?>