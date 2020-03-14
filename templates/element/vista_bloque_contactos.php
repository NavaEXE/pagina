 <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?>
        
    
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
    
            <?php foreach ($query as $row) {
                    if($row['status']=="1"){
                        ?>
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a class="ver" href="/directorio/contactos/contacto?var=<?php echo base64_encode($row['id'])?>">
                        
                        <img alt="image" class="rounded-circle" src="<?php 
                        if($row['url_imagen']=="/webroot/img/contactos/"){
                            
                            echo "/webroot/img/a3.png";
                        }else{
                            
                             echo $row['url_imagen'];
                        }
                        ?>">


                       
                        <h3 class="m-b-xs"><strong><?php echo $row['nombre']?> <?php echo $row['apellido_paterno']?> <?php echo $row['apellido_materno']?></strong></h3>
                        <div class="font-bold"><?php
                            if($row['titulo']==null){
                                
                                echo "Titulo: Sin ingresar";
                            }else {
                                
                                 echo $row['titulo'];
                            }
                            
                           ?></div>
                        <address class="m-t-md">
                            <strong><?php
                        if($row['email']=null){
                            
                            echo "Email no ingresado";
                        }else {
                            
                              echo $row['email'];
                        }
                        ?></strong>
                           <br>
                            <?php if($row['calle']!=null){
                        
                            echo $row['calle']?>, <?php echo "#";echo $row['numero_externo']?><br>
                            Col. <?php echo $row['colonia'];?>
                            <br>
                            <?php echo $row['municipio']?> <?php echo $row['estado']?><?php if($row['codigo_postal']!=null){echo ", Cod. P  ostal. ";echo $row['codigo_postal'];}else{} }else{   ?> <br><br><?php }?>
                            <br>
                            <?php if($row['telefono']!=null){ ?>
                            <abbr title="Telefono">Tel. </abbr><?php echo $row['telefono']?>&nbsp&nbsp    
                            <?php } ?>
                              <?php if($row['celular']!=null){ ?>
                            <abbr title="Celular">Cel. </abbr><?php echo $row['celular']?>&nbsp&nbsp    
                            <?php } ?>
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a style="font-size: 15px;" href="#victorModal4" data-toggle="modal"  class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a style="font-size: 15px;" href=""  class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a style="font-size: 15px;" href=""  class="btn btn-xs btn-white"><i class="fa fa-pencil"></i> Edit</a>
                        </div>
                    </div>

                </div>
            </div>
           <?php }} ?>


        </div>
        </div>
  
<style>
button .botonclose:hover{color:#fff}
</style>
        
      
      

  

                             
 <!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal4" class="modal fade">
    <div class="modal-dialog" style="max-width: 1034px !important;
    margin: 21.75rem auto">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Editar Contacto</h4>
                <button style="color: #000;width: 55px;height: 34px;margin-left: 0px;" type="button" class="btn btn-danger close" data-dismiss="modal" aria-hidden="true">
                    <h1 style="margin-left: -9px;margin-top: -11px;width: 55px;height: 48px;" class="botonclose">&times;</h1>
                </button>
            </div>
            <div>

               <?php
                echo $this->element('llamadas');
              ?>
            </div>
           
        </div>
    </div>
</div>

    