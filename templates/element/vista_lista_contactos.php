<?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?>
        

     
        <div class="row tabla-contacto-lista">
            <?php foreach ($query as $row) {

                        ?>
                          <tr>
                        <td class="client-avatar">
                        
                        <img alt="image" src="<?php 
                        if($row['url_imagen']=="/webroot/img/contactos/"){
                            
                            echo "/webroot/img/a3.png";
                        }else{
                            
                             echo $row['url_imagen'];
                        }
                        ?>"> </td>
                                                    <td><a href="/directorio/contactos/contacto?var=<?php echo base64_encode($row['id'])?>" class="client-link"><?php echo $row['nombre']?> <?php echo $row['apellido_paterno']?> <?php echo $row['apellido_materno']?></a></td>
                                                    <td class="contact-type"><i class="fa fa-id-card-o"> </i></td>
                                                    <td> <?php echo $row['titulo']?></td>
                                                    <td class="contact-type"><i class="fa fa-map-marker"> </i></td>
                                                    <td> <?php echo $row['calle']?>  #<?php echo $row['numero_externo']?>  <?php echo $row['colonia']?>  <?php echo $row['municipio']?>  <?php echo $row['pais']?></td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                    <td> <?php echo $row['email']?></td>
                                                    <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                    <td> <?php echo $row['telefono']?></td>
                                                    <td class="contact-type"><i class="fa fa-mobile"> </i></td>
                                                    <td> <?php echo $row['celular']?></td>
                                                    <td><a style="font-size: 14px;" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a></td>
                                                    <td style="margin-left:-5%"><a style="font-size: 14px;" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email </a></td>
                                             
                                                   
                                                </tr>
         
           <?php } ?>


        </div>

  

        
      


