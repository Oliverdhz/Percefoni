$(document).ready(function(){
    console.log('Me estoy ejecutando');
    $('#extracurricular').submit(function(e){
        const datos = {
            mot_pag: $('#mot_pag').val(),
            monto: $('#monto').val(),
            nom_i: $('#nom_i').val()
        };
        $.post('anadir.php', datos, function(response){
            alert(response);
        });
    });
});