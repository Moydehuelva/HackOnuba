
(function () {
    "use strict"


    document.addEventListener('DOMContentLoaded', function(){
        //Datos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var correo = document.getElementById('email');
        //campos entradas
        var entrada_dia = document.getElementById('entrada_dia');
        var entrada_completa = document.getElementById('entrada_completa');

        //botones y divs
        var calcular = document.getElementById('btnCalcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        botonRegistro.style.display = 'none';



        calcular.addEventListener('click', calcularCantidades);
        entrada_dia.addEventListener('blur', mostrarDia);
        entrada_completa.addEventListener('blur', mostrarDia);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        correo.addEventListener('blur', validarCampos);
        correo.addEventListener('blur', validarMail);

        function validarCampos(){
          if(this.value == '') {
            errorDiv.style.display= 'block'
            errorDiv.innerHTML = "Este campo es obligatorio";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
          }else {
            errorDiv.style.display= 'none';
            this.style.border = '1px solid #cccccc';
          }
        }
        function validarMail() {
          if (this.value.indexOf("@") > -1) {
            errorDiv.style.display ='none';
            this.style.border = '1px solid #cccccc'
          }else {
            errorDiv.style.display= 'block'
            errorDiv.innerHTML = "El formato de direccion de correo no es valido";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
          }

        }

        function calcularCantidades(event){
            event.preventDefault();

                var entradaDia = entrada_dia.value;
                var entradaCompleta = entrada_completa.value;


                var totalPagar = ("0")

                var listadoCompras = [];
                if (entradaDia >= 1){
                  listadoCompras.push(entradaDia + ' Entradas para el 12 de junio');
                }
                if (entradaCompleta >= 1){
                  listadoCompras.push(entradaCompleta + ' Entradas para el Evento');

                }
                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoCompras.length; i++) {
                  lista_productos.innerHTML += listadoCompras[i] + '<br/>';
                }
                // Check if at least one ticket is purchased
                if (entradaDia > 0 || entradaCompleta > 0) {
                 // Show the registration button if a ticket is purchased
                 botonRegistro.style.display = 'block';
                } else {
                // Hide the registration button if no ticket is purchased
                  botonRegistro.style.display = 'none';
                }
                suma.innerHTML = totalPagar + " €";
        }

        function mostrarDia (event) {
          var entradaDia = entrada_dia.value;
          var entradaCompleta = entrada_completa.value;

          var diasElegidos = [];
          if(entradaDia > 0){
            diasElegidos.push('12-junio');
          }
          if (entradaCompleta > 0) {
            diasElegidos.push('12-junio', '13-junio');
          }
          for (var i = 0; i < diasElegidos.length; i++) {
            document.getElementById(diasElegidos[i]).style.display = 'block';
          }
        }

    })
})();

$(function() {

  //menu responsive

  $('.menu-movil').on('click', function(){
    $('.menu').slideToggle();
  });

  //programa conferencias
  $('.programa-conferencia .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');

  $('.menu-programa a').on('click', function(){

    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);

    return false;

  })

  //Cuenta Atras
  $('.cuenta-atras').countdown('2024/06/12 09:00:00', function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  })

  //colorbox
  $('.invitado_info').colorbox({inline:true, width:"50%"});


});
