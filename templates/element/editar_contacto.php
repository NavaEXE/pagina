        <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?> 
   
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
           
                      <?php  $variable = base64_decode($_REQUEST['var']);
                             foreach ($query as $row) {
                             if($row['id']==$variable){
                                 
                                 
                             
                                ?>
                          
              <form id="form" class="wizard-big" method="post" enctype="multipart/form-data">
        <div>
        
                     
               
                <div class="col-lg-12">
                    
                        <div class="ibox-content" style="  padding: 0px 0px 0px 10px;">
              <div class="ibox-content col-lg-12" style="float:left;border-style:hidden !important;margin-bottom: -25px;">

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
    <div class="col-lg-1" style="float:left;margin-right:1%">
                        <section id="Images" class="images-cards">

                                <div class="row" >

                                    <div id="add-photo-container">

                                        <div style="border-radius: 21%!important;border-radius: 100%!important;" class="add-new-photo first" id="add-photo">

                                            <span><img style=" height: auto;width: 83px;" src="<?php if($row['url_imagen']=="/webroot/img/contactos/"){
                                                echo "/webroot/img/a3.png";
                                            }else{ echo $row['url_imagen'];}?>" alt=""></span>
                                        </div>
                                        <input value="<?php echo $row['url_imagen']?>" type="file" multiple id="add-new-photo" name="imagen" accept="image">
                                    </div>
                                </div>

                        </section>
                    </div>
                    
                    
                <main>
                
                             <div class="col-lg-12"> 
                                <div class="form-group row">
                                    <div class="col-sm-4"><input value="<?php echo $row['nombre']?>" type="text" placeholder="Nombre" class="form-control required" name="nombre" >
                                    </div> 
                                    <div class="col-sm-4"><input value="<?php echo $row['apellido_paterno']?>" type="text" placeholder="Apellido Paterno" class="form-control required" name="apellido_paterno" >
                                    </div>
                                    <div class="col-sm-4"><input value="<?php echo $row['apellido_materno']?>" type="text" placeholder="Apellido Materno" class="form-control" name="apellido_materno" ></div>    
                                      
                                     
                               <div class="col-sm-4">
                                   <input value="<?php echo $row['titulo']?>" type="text" placeholder="Titulo" class="form-control" name="titulo" >
                                         </div>
                                        
                      
                                    <div  class="col-sm-4">
                                    <input value="<?php echo $row['rfc']?>" placeholder="RFC" type="text" class="form-control" name="rfc" ></div>
                                    <div class="col-sm-4">
                                    <input value="<?php echo $row['curp']?>" placeholder="CURP" type="text" class="form-control" name="curp" >
                                    </div>
                                    </div>
                          
                                      <div class="errorMessages"></div>
                                </div>
                                    
        
                              
                </main>
                            
               
                        </div>
                 
                        
                    <div class="col-lg-12" style="float: left;background-color: #ffffff;color: inherit;border-top-color: #e7eaec; border-image: inherit;border-top-style: solid;border-top-width: 1px;">
                                                              
                       
                               
                                    <div class="form-group row">
                                     
                                </div>
                           
                                
                                <div class="form-group row" style="margin-bottom:0px"><label class="col-sm-1 col-form-label">Dirección</label>
                                    <div class="col-sm-12">
                                    <input value="<?php echo $row['calle']?>" style="width: 33%;float:left;" type="text" class="form-control" name="calle" placeholder="Calle">
                                     <input value="<?php echo $row['numero_externo']?>" style="width: 20%;float: left;margin-left: 2%;" type="text" class="form-control" name="numero_externo" placeholder="Num. Ext" >
                                    <input value="<?php echo $row['numero_interno']?>" style="width: 20%;float:left;margin-left:2%;"type="text" class="form-control" name="numero_interno" placeholder="Num. Int" >
                                     <input value="<?php echo $row['colonia']?>" style="width:20%;float:left;margin-left:2%" type="text" class="form-control" name="colonia" placeholder="Colonia" >
                                   
                                    
                                    
                                    </div>
                                </div>
                                   <div class="form-group row">
                                    <div class="col-sm-12">
                                    <input value="<?php echo $row['codigo_postal']?>" style="width: 20%;float: left;" type="text" class="form-control" name="codigo_postal" placeholder="Cod. Postal" >
                                    <input value="<?php echo $row['municipio']?>" style="width: 27%;float:left;margin-left:2%;"type="text" class="form-control" name="municipio" placeholder="Ciudad/municipio" >
                                    <input value="<?php echo $row['estado']?>" style="width: 26%;float: left;margin-left: 2%;" type="text" class="form-control" name="estado" placeholder="Estado" >
                                    <input value="<?php echo $row['pais']?>" style="width: 20%;float: left;margin-left: 2%;" type="text" class="form-control" name="pais" placeholder="Pais" disabled >
                                    </div>
                                </div>
                                
                         
                              <div style="float:left; margin-bottom:0px" class="form-group row">
                                    <label class="col-sm-1 col-form-label">Telefono</label>
                                    <div style="margin-right: 2%" class="col-sm-3">
                                    <input value="<?php echo $row['telefono']?>" style="width:100%" type="text" class="form-control" name="telefono" >
                                    </div>
                                    <label class="col-sm-1 col-form-label">Celular</label>

                                    <div class="col-sm-3"><input value="<?php echo $row['celular']?>" style="width:100%" type="text" class="form-control" name="celular" ></div>
                                </div>
                               
                            
                              <div style="float:left; margin-bottom:0px" class="form-group row">
                                    <label class="col-sm-1 col-form-label">Email</label>
                                    <div  style="margin-right:2%"   class="col-sm-3">
                                    <input value="<?php echo $row['email']?>"  type="text" class="form-control" name="email" >
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
   
        <?php }}?>
         <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--  /Bootstrap y jQuery -->





   
  
 
