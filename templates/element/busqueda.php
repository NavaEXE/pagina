
<?php
            
            
            use Cake\ORM\TableRegistry;


$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find();    


             ?>
          
                      
                    <div class="col-sm-12">
                    <div class="form-1-2">
                    <div class="ibox selected">
                        <div class="ibox-content">
                             <div class="input-group">
                              
                                <input autocomplete="off" type="text" placeholder="Buscar"  id="autocomplete" class="input form-control caja" name="caja"><i style="margin-top:12px;margin-left:-25px" class="fa fa-search"></i>
                       
                              
                            </div>
                        </div>
                    </div>
                    </div>
                   
                    <div id="resultado" class="menu-oculto" class="col-md-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Contactos</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                
         <?php  $array=array();
                $array2=array();
                foreach ($query as $row) {
                $equipo=utf8_encode($row['nombre']);
                $equipo2=utf8_encode($row['apellido_paterno']);
                $equipo3=utf8_encode($row['apellido_materno']);
                $equipo4=utf8_encode($row['titulo']);
                $equipo5=utf8_encode($row['celular']);
                $equipo6=utf8_encode($row['telefono']);
                array_push($array,$equipo,$equipo2,$equipo3,$equipo4,$equipo5);
              
                        ?> 
                                    
                                    <section id="result">
                                        
                                    </section>
                                    
                    <?php }?>
                                   

                              

                            </div>

                        </div>
                    </div>

                </div></div>
                    
                </div>
                
                 <link href="/webroot/css/jquery-ui.css" rel="stylesheet">




<script src="/webroot/external/jquery/jquery.js"></script>
<script src="/webroot/js/jquery-ui.js"></script>

<script>
var tags = <?= json_encode($array)?>

    
    
    
$( "#autocomplete" ).autocomplete({
  source: tags,
});
</script>


