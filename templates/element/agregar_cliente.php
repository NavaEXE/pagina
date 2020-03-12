    
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- Booststrap -->

    <!--  /Booststrap -->

    <link rel="stylesheet" href="/webroot/css/icons.css">
    <link rel="stylesheet" href="/webroot/css/grid.css">
    <link rel="stylesheet" href="/webroot/css/modal.css">
    <link rel="stylesheet" href="/webroot/css/styles.css">
 
        <div class="row">

             

             <style>
            
                 input{
                     
                     font-size: 14px !important;
                 }
                 button{
                     
                     font-size: 14px !important;
                 }
                 .error{
                     
                     top:-900px;
                     font-size: 12px;
                 }
                 ul{
                     
                     display: none;
                 }
                 .content{
                     
                     padding: 0rem;
                         box-shadow: none;
                 }
               
                 .ibox-content {
                 border-style: none;
                 }
                 label{
                     
                     font-size: 16px;
                 }

                 
            </style>
        </div>
           
                
              <form id="form" class="wizard-big" method="post" enctype="multipart/form-data">
        <div>
        
                     
               
                <div class="col-lg-12">
                    
                        <div class="ibox-content">
              <div class="ibox-content col-lg-12" style="float:left;border-style:hidden !important;">

                     <div class="modal">
                          <div class="modal-main">
                            <div class="row">
                              <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
                              <div class="c-6-lg c-6-md c-10-sm c-12-xs close-modal">
                                <div class="modal-card" id="loading">
                                  <div class="preloader"></div>
                                  <span class="tag">Cargando...</span>
                                </div>
                                <div class="modal-card" id="Message">
                                  <span class="tag"></span>
                                </div>
                              </div>
                              <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
                            </div>
                          </div>
                        </div>


             <header></header>
    <div class="col-lg-3" style="margin-left: 10px;margin-top:8px;float:left">
                        <section id="Images" class="images-cards">

                                <div class="row" >

                                    <div id="add-photo-container">

                                        <div style="filter: invert(1);border-radius: 21%!important;border-radius: 100%!important;" class="add-new-photo first" id="add-photo">

                                            <span><img style=" height: auto;width: 150px;" src="/webroot/img/foto-contacto.png" alt=""></span>
                                        </div>
                                        <input type="file" multiple id="add-new-photo" name="imagen" accept="image">
                                    </div>
                                </div>

                        </section>
                    </div>
                    
                    
                <main>
                
                             <div class="col-lg-12"> 
                                <div class="form-group row"> <div class="col-sm-12">
                                       
                                        <div>
                                         <div class="i-checks col-lg-3" style="float:left"><label> <input type="radio" checked="" value="1" name="tipo_persona"> <i></i> Persona Fisica </label>
                                         </div>
                                        <div class="i-checks col-lg-5" style="float:left"><label> <input type="radio"  value="2" name="tipo_persona"> <i></i> Persona Moral </label></div>
                                        </div>
                                    </div>
                          
                                      <div class="errorMessages"></div>
                                </div>
                                    
                                <div class="form-group row">
                                   <label style="margin-right:2%" class="col-sm-1 col-form-label">Nombre Comercial</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control required" name="nombre_comercial" >
                                    </div>
                                    <label class="col-sm-1 col-form-label">Razon Social</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control required" name="razon_social" >
                                    </div>    
                                </div>
                                
                                
                                    
                                
                                
                         
                               
                                </div>
                </main>
                            
               
                        </div>
                        
                        <div class="col-lg-12" style="float: left;background-color: #ffffff;color: inherit;padding: 15px 20px 20px 20px;border-top-color: #e7eaec; border-image: inherit;border-top-style: solid;border-top-width: 1px;">
                            
                            <div class="form-group row"><label class="col-sm-1 col-form-label">Nombre</label>
                                    <div class="col-sm-3"><input type="text" class="form-control required" name="nombre" >
                                    </div>
                                    <label class="col-sm-1 col-form-label">Apellido Paterno</label>
                                    <div class="col-sm-3"><input type="text" class="form-control required" name="apellido_paterno" >
                                    </div>
                                    <label class="col-sm-1 col-form-label">Apellido Materno</label>
                                    <div class="col-sm-3"><input type="text" class="form-control required" name="apellido_materno" ></div>
                                    <label class="col-sm-1 col-form-label">Titulo</label>
                                    <div class="col-sm-3">
                                       <select name="titulo" style="height: auto;font-size: 16px;" class="form-control m-b">
                                        <option selected>Opciones</option>
                                        <option value="Ingeniero">Ingeniero</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Licenciado">Licenciado</option>
                                        <option value="Profesor">Profesor</option>
                                        <option value="Señor">Señor</option>
                                        <option value="Señora">Señora</option>
                                        <option value="Quimico">Quimico</option>
                                        <option value="Encargado">Encargado</option>
                                        <option value="Soporte">Soporte</option>
                                        <option value="Desarrollo">Desarrollo</option>
                                    </select></div>
                                     <label  class="col-sm-1 col-form-label">RFC</label>
                                    <div  class="col-sm-3">
                                    <input type="text" class="form-control" name="rfc" ></div>
                                     <label class="col-sm-1 col-form-label">CURP</label>

                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" name="curp" >
                                    </div>
                                </div>
                        </div>
                        
                    <div class="col-lg-12" style="float: left;background-color: #ffffff;color: inherit;padding: 15px 20px 20px 20px;border-top-color: #e7eaec; border-image: inherit;border-top-style: solid;border-top-width: 1px;">
                                                              
                       
                               
                                    <div class="form-group row">
                                     
                                </div>
                           
                                
                                <div class="form-group row"><label class="col-sm-1 col-form-label">Dirección</label>
                                    <div class="col-sm-9">
                                    <input style="width: 33%;float:left;" type="text" class="form-control" name="calle" placeholder="Calle">
                                     <input style="width: 20%;float: left;margin-left: 2%;" type="text" class="form-control" name="numero_externo" placeholder="Num. Ext" >
                                    <input style="width: 20%;float:left;margin-left:2%;"type="text" class="form-control" name="numero_interno" placeholder="Num. Int" >
                                     <input style="width:20%;float:left;margin-left:2%" type="text" class="form-control" name="colonia" placeholder="Colonia" >
                                   
                                    
                                    
                                    </div>
                                </div>
                                   <div class="form-group row">
                                    <div class="col-sm-10" style="margin-left:79px">
                                      <input style="width: 20%;float: left;" type="text" class="form-control" name="codigo_postal" placeholder="Cod. Postal" >
                                    <input style="width: 27%;float:left;margin-left:2%;"type="text" class="form-control" name="municipio" placeholder="Ciudad/municipio" >
                                    <input style="width: 20%;float: left;margin-left: 2%;" type="text" class="form-control" name="estado" placeholder="Estado" >
                                    <input style="width: 16%;float: left;margin-left: 2%;" type="text" class="form-control" name="pais" placeholder="Pais" >
                                    </div>
                                </div>
                                
                         
                              <div style="float:left" class="form-group row">
                                    <label class="col-sm-1 col-form-label">Telefono</label>
                                    <div style="margin-right: 2%" class="col-sm-3">
                                    <input style="width:100%" type="text" class="form-control" name="telefono" >
                                    </div>
                                    <label class="col-sm-1 col-form-label">Celular</label>

                                    <div class="col-sm-3"><input style="width:100%" type="text" class="form-control" name="celular" ></div>
                                </div>
                               
                            
                              <div style="float:left" class="form-group row">
                                    <label class="col-sm-1 col-form-label">Email</label>
                                    <div  style="margin-right:2%"   class="col-sm-3">
                                    <input  type="text" class="form-control" name="email" >
                                    </div>
                                      
                                    <label class="col-sm-1 col-form-label">Página Web</label>

                                    <div class="col-sm-3"><input style="width:100%" type="text" class="form-control" name="pagina_web" ></div>
                                </div>
                       
                        </div>
                     
                    </div>
                   
                </div>
                
                     
                              
        </div>
              <div class="modal-content" "max-width: 1034px !important">
                                    <div class="modal-footer">
                                    
                                        <button class="btn btn-primary btn-sm" type="submit">Guardar Cambios</button>
                                    </div>
                                </div>
                             
                             
 </form> 
   
        
         <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--  /Bootstrap y jQuery -->


    <script src="/webroot/js/modal.js"></script>
    <script src="/webroot/js/functions.js"></script>
    <script src="/webroot/js/scripts.js"></script>

    <script>
        $(document).ready(function(){
    
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
         
              
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        }
                    });
       });
    </script>
    
   
  
 


