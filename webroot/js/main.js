var URLactual = window.location.pathname;
if(URLactual != "/"){
    
    $('#wrapper').removeClass('menu-oculto');
    
}
if(URLactual == "/admin/index"){
    
   $('#menu_escritorio').addClass('active');
    
}

$('.editar_perfil').on('click', function (e) {
    
    window.location="/Perfil/editar"
    
   });
$('#regresar').on('click', function (e) {
    
    window.location="/Perfil/index"
    
   });


if(URLactual == "/directorio/contactos"){
   $('#menu_directorio').addClass('active');
   $('#menu_contactos').addClass('active');
   $('#menu_directorio ul').addClass('in');  
}

if(URLactual == "/directorio/clientes"){
   
     $('#menu_directorio').addClass('active');
   $('#menu_directorio ul').addClass('in');
   $('#menu_clientes').addClass('active');
    
}
if(URLactual == "/directorio/provedores"){
      
    $('#menu_directorio').addClass('active');
   $('#menu_directorio ul').addClass('in');
   $('#menu_provedores').addClass('active');
    
}
if(URLactual == "/directorio/usuarios"){
    $('#menu_directorio').addClass('active');
   $('#menu_directorio ul').addClass('in');
   $('#menu_usuarios').addClass('active');
    
}


$(document).ready(function () {
    
    
    $('#filtro').focus() 
    
    $('#filtro').on('click',function(e){
        var filtro = $('#filtro').val()
        $.ajax({
            type : 'POST',
            url : '/templates/contactos/filtro',
            data : { 'filtro': filtro },
            })
        .done(function(resultado){
           
                $('#contactos').html(resultado)
           })
        .fail(function(){
               
               alert('Hubo un error:(')
               
           })
        
        
    })

    
    
    
    $('.buscar').on('click',function(e){
		$('#tamaño').removeClass('col-sm-12');
        $('#tamaño').addClass('col-sm-8');
        $('#buscarvista').removeClass('menu-oculto');
        $('#buscarvista').addClass('animated bounceInUp active');
        $('#buscarboton').addClass('menu-oculto');
        $('#cerrarbuscar').removeClass('menu-oculto');
        $('#filtros').addClass('filtros');
        $('#filtros').removeClass('filtros1');
	});
    
        $('.cerrarbuscar').on('click',function(e){
        $('#resultado').addClass('menu-oculto');
        $('#tamaño').removeClass('col-sm-8');
        $('#tamaño').addClass('col-sm-12');
        $('#buscarboton').removeClass('menu-oculto');
        $('#cerrarbuscar').addClass('menu-oculto');
        $('#buscarvista').addClass('menu-oculto');
        $('#filtros').addClass('filtros1');
        $('#filtros').removeClass('filtros');
        
   
	})
        $('.caja').on('click',function(e){
        $('#resultado').removeClass('menu-oculto');
        $('#buscarvista').addClass('animated bounceInUp active');
   
	});
            
    
     $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
     $('.summernote').summernote();
    var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.name == "nombre") {
                    e.target.setCustomValidity("Ingrese nombre");
                }
                 if (e.target.name == "apellido_paterno") {
                    e.target.setCustomValidity("Ingrese apellido paterno");
                }
                 if (e.target.name == "apellido_materno") {
                    e.target.setCustomValidity("Ingrese apellido materno");
                }
                if (e.target.name == "fecha_nacimiento") {
                    e.target.setCustomValidity("Seleccione su fecha de nacimiento");
                }
                  if (e.target.name == "rfc") {
                    e.target.setCustomValidity("Ingrese su rfc");
                }
                  if (e.target.name == "curp") {
                    e.target.setCustomValidity("Ingrese su curp");
                }
                  if (e.target.name == "calle") {
                    e.target.setCustomValidity("Ingrese una calle");
                }
                  if (e.target.name == "colonia") {
                    e.target.setCustomValidity("ingrese su colonia");
                }
                  if (e.target.name == "codigo_postal") {
                    e.target.setCustomValidity("Ingrese su codigo postal");
                }
                  if (e.target.name == "municipio") {
                    e.target.setCustomValidity("ingrese su ciudad/municipio");
                }
                  if (e.target.name == "numero_interno") {
                    e.target.setCustomValidity("El campo numero interno esta vacio");
                }
                  if (e.target.name == "numero_externo") {
                    e.target.setCustomValidity("El campo fecha es requerido");
                }
               
            }
        };
    }
});

