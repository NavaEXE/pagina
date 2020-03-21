$(document).ready(function(){
    
    $('#autocomplete2').focus() 
    
    $('#autocomplete2').on('keyup',function(){
        var search = $('#autocomplete2').val()
           $.ajax({
            type : 'POST',
            url : '/templates/clientes/consulta',
            data : { 'search': search },
            beforeSend: function(){
                
                $('#result2').html('<img src="/webroot/img/cargando')
                
            }
            })
        .done(function(resultado){
               
               $('#result2').html(resultado)
               
           })
        .fail(function(){
               
               alert('Hubo un error:(')
               
           })
        
        
    })
})