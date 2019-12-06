$(document).ready(function(){
    console.log('Hola');
    $("#registro_empleados").submit(function(patata){
        const datos = {    
            nombreemp: $("#nombre_e").val(),
            apellidoemp: $("#apellido_e").val(),
            sexoemp: $("#sexo_e option:selected").val(),
            direccionemp: $("#direccion_e").val(),
            edademp: $("#edad_e").val(),
            emailemp: $("#email_e").val(),
            horarioemp: $("#horario_e").val(),
            salarioemp: $("#salario").val(),
            cargoemp: $("#cargo_e option:selected").val(),
            deptoemp: $("#departamento_e option:selected").val(),
            enfemp: $("#enfermedades_alergias").val(),
            telemp: $("#tel_personal_e").val(),
            telpariente: $("#tel_pariente_e").val(),
            fechaingemp: $("#fecha_ingresoemp").val(),
            cedulaemp: $("#cedula_e").val(),
            nivelacademico: $("#nivel_academico_e").val(),
            nivelencargado: $("#nivel_encargado").val()

        };

        $.post("ingresaremp.php", datos, function(respuesta){

        });

        patata.preventDefault();
    });
});