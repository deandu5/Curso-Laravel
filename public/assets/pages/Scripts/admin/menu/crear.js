$(document).ready(function(){
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function(){
        $('#mostar-icono').removeClass().addClass('fa fa-fw' + $(this).val());
    });
});