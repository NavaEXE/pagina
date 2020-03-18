 <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?>
        

        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
    
            <?php foreach ($query as $row) {

                        ?>
                        
                                <div class="col-lg-4">
                <div class="contact-box">
                    <a class="row" href="/directorio/contactos/contacto?var=<?php echo base64_encode($row['id'])?>">
                    <div class="col-4">
                        <div class="text-center">
                            <img style=" width: 100px; height: 100px;" alt="image" class="rounded-circle m-t-xs img-fluid" src="<?php 
                        if($row['url_imagen']=="/webroot/img/contactos/"){
                            
                            echo "/webroot/img/a3.png";
                        }else{
                            
                             echo $row['url_imagen'];
                        }
                        ?>">
                            <div class="m-t-xs font-bold"><?php echo $row['titulo']?></div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><strong><?php echo $row['nombre']?> <?php echo $row['apellido_paterno']?> <?php echo $row['apellido_materno']?></strong></h3>
                        <p><i class="fa fa-map-marker"></i> <?php echo $row['calle']?>, #<?php echo $row['numero_externo']?><?php echo "<br>";  ;echo $row['municipio']?> <?php echo $row['estado']?> </p>
                    
                        <address>
                            <strong><?php echo $row['email']?></strong><br>
                            <abbr title="Telefono">Tel. Oficina. </abbr><?php echo $row['telefono']?>&nbsp   &nbsp    
                             <abbr title="celular">Cel. </abbr><?php echo $row['celular']?>
                        </address>
                    </div>
                        </a>
                          <div style="float: right;margin-top: -28px;"> 
                         <a class="btn btn-xs btn-white" style="font-size: 25px;"><i class="fa fa-phone"></i></a>
                      <a class="btn btn-xs btn-white" style="font-size: 25px;"><i class="fa fa-envelope"></i></a>
                       </div>
                       
                        
                </div>
            </div>
            
           <?php } ?>


        </div>
        </div>
  

        
      
