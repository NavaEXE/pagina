<?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?>
        

     
        <div class="row">
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
                                                    <td><a href="" class="client-link"><?php echo $row['nombre']?> <?php echo $row['apellido_paterno']?> <?php echo $row['apellido_materno']?></a></td>
                                                    <td>Proin Limited</td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                    <td> <?php echo $row['email']?></td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
         
           <?php } ?>


        </div>

  

        
      


