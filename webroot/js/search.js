$(document).ready(function(){
    
    $('.typeahead_3').focus() 
    
    $('#autocomplete').on('keyup',function(){
        var search = $('#autocomplete').val()
           $.ajax({
            type : 'POST',
            url : '/templates/contactos/consulta',
            data : { 'search': search },
            beforeSend: function(){
                
                $('#result').html('<img src="/webroot/img/cargando')
                
            }
            })
        .done(function(resultado){
               
               $('#result').html(resultado)
               
           })
        .fail(function(){
               
               alert('Hubo un error:(')
               
           })
        
        
    })
})