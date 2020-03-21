
<?php
            
            
            use Cake\ORM\TableRegistry;


$clientes = TableRegistry::getTableLocator()->get('Clientes');
$query = $clientes->find();    


             ?>
              <style>
td, th {
    border-bottom: 0.1rem solid #e1e1e1;
    padding: 1.2rem 1rem !important;
    text-align: left;
}
             
                      
                 
                  
                </style>
                      
                    <div class="col-sm-12">
                    <div class="form-1-2">
                    <div class="ibox selected">
                        <div class="ibox-content">
                             <div class="input-group">
                              
                                <input autocomplete="off" type="text" placeholder="Buscar"  id="autocomplete2" class="typeahead_3 form-control caja" name="caja"><i style="margin-top:12px;margin-left:-25px" class="fa fa-search"></i>
                       
                              
                            </div>
                        </div>
                    </div>
                    </div>
                   
                    <div id="resultado" class="menu-oculto" class="col-md-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Clientes</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                           
                            </div>
                        </div>
                        <div class="ibox-content">

                              
                                
         <?php  $array=array();
                $array2=array();
                foreach ($query as $row) {
                $equipo=utf8_encode($row['nombre']);
                $equipo2=utf8_encode($row['apellido_paterno']);
                $equipo3=utf8_encode($row['apellido_materno']);
                array_push($array,$equipo,$equipo2,$equipo3);
              
                        ?> 
                                    
                                    <table class="table table-striped table-hover">
                                        <tbody id="result2"></tbody>
                                    </table>
                                    
                                    
                    <?php }?>
                                   
                    </div>

                </div></div>
                    
                </div>
                
                 <link href="/webroot/css/jquery-ui.css" rel="stylesheet">




<script src="/webroot/external/jquery/jquery.js"></script>
<script src="/webroot/js/jquery-ui.js"></script>
    <script src="/webroot/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>


<script>
var tags = <?= json_encode($array)?>


$('.typeahead_3').typeahead({
    minLength: 2,

  source: tags,
});
</script>


