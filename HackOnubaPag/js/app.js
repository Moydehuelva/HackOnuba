(function () {
    "use strict"
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoader', function(){

        //Datos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var correo = document.getElementById('correo');
        //campos entradas
        var entrada_dia = document.getElementById('entrada_dia');
        var entrada_completa = document.getElementById('entrada_completa');

        //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var resultado = document.getElementById('lista-productos');

        calcular.addEventListener('click', calcularMontos);

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            }else{
                var entradaDia = entrada_dia.value;
                var entradaCompleta = entrada_completa.value;

                var totalPagar = (entradaDia * 30) + (entradaCompleta * 50);
                console.log(totalPagar);
            }
        }

    })
})