$(document).ready(function(){
    console.log('Me estoy ejecutando');
    var colors = 1;
    $('#ocolor').click(function(e){
        if(colors == 1){
            var a = 0;
            var colors1 = $('#color option:selected').val();
            var relleno = '<select id="color2"><option>Color alternativo</option>';
            if(colors1 != 'Blanco'){
                relleno += '<option>Blanco</option>';
            }
            if(colors1 != 'Negro'){
                relleno += '<option>Negro</option>';
            }
            if(colors1 != 'Rojo'){
                relleno += '<option>Rojo</option>';
            }
            if(colors1 != 'Azul'){
                relleno += '<option>Azul</option>';
            }
            if(colors1 != 'Rosa'){
                relleno += '<option>Rosa</option>';
            }
            if(colors1 != 'Gris'){
                relleno += '<option>Gris</option>';
            }
            relleno += '</select>';
            $(relleno).appendTo('#scolor');
        }
        e.preventDefault();
    });
    $('#listo').click(function(e){
        var formData = new FormData();
        var files = $('#imagen')[0].files[0];
        formData.append('file', files);
        $.ajax({
            url: 'reciclaje/anadirimagen.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                if (response == 1){
                    const datos = {
                        nombre: $('#nombre').val(),
                        procedencia: $('#procedencia').val(),
                        marca: $('#marca').val(),
                        precio: $('#precio').val(),
                        peso: $('#peso').val(),
                        descripcion: $('#descripcion').val(),
                        color: $('#color option:selected').val()
                    };
                $.post('reciclaje/anadir.php', datos, function (respuesta){
                    alert(respuesta);
                    $('#nombre').val('');
                    $('#procedencia').val('');
                    $('#marca').val('');
                    $('#precio').val('');
                    $('#peso').val('');
                    $('#descripcion').val('')
                });
                }else if (response == 2){
                    alert('Se detectó un archivo pero no se movió');
                }else{
                    alert(response);
                }
            }
        });
        e.preventDefault();
    });
});