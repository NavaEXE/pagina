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
                        <div class="font-bold"><?php echo $row['titulo']?></div>
                        <address class="m-t-md">
                            <strong><?php echo $row['email']?></strong><br>
                            <?php echo $row['calle']?>, #<?php echo $row['numero_externo']?><br>
                            <?php echo $row['municipio']?> <?php echo $row['estado']?>, CP. <?php echo $row['codigo_postal'];?><br>
                            <abbr title="Telefono">Tel. Oficina. </abbr><?php echo $row['telefono']?>&nbsp   &nbsp    
                             <abbr title="celular">Cel. </abbr><?php echo $row['celular']?>
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a href=""  class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a href=""  class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a href=""  class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
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
<div id="victorModal" class="modal fade">
    <div class="modal-dialog" style="max-width: 1034px !important;
    margin: 21.75rem auto">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Agregar Nuevo Contacto</h4>
                <button style="color: #000;width: 55px;height: 34px;margin-left: 0px;" type="button" class="btn btn-danger close" data-dismiss="modal" aria-hidden="true">
                    <h1 style="margin-left: -9px;margin-top: -11px;width: 55px;height: 48px;" class="botonclose">&times;</h1>
                </button>
            </div>
            <div>

               <?php
                echo $this->element('agregar_contacto');

              ?>
            </div>
           
        </div>
    </div>
</div>

