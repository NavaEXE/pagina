 <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$escritorio = TableRegistry::getTableLocator()->get('Escritorio');
$query = $escritorio->find();


            
             ?>
       
       <div id="page-wrapper" class="gray-bg1 gray-bg">
        <div class="row border-bottom">
      
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Escritorio</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            Escritorio
                        </li>
                       
                    </ol>
                </div>
            </div>
        <div class="row" style="margin-left:10px">
           
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <ul class="notes">
                        <li>
                           <a href="/escritorio/agregar">
                            <div style="text-align:center">
                               <i style="font-size: 158px;margin-top: 13px; opacity: 8%;" class="fa fa-file-text"></i>
                                
                            </div>
                            </a>
                        </li>
                        
                        
                        
                    <?php foreach ($query as $row) {
                  
                        if($row['id_usuario']==$user['id']){
               
        
                        ?>
        	    
                      <li>
                            <div>
                           
                                <small><?php echo $newDate = date("d-m-Y", strtotime($row['created']));?></small>
                                
                                <h3 style="font-size:19px"><?php
                                        
                                        if($row['nombre']==""){

                                            echo "Nuevo Documento";

                                        }else{

                                            echo $row['nombre'];
                                        }
                                        ?>
                                </h3>
                                <h5 style="font-size:14px;">Titulo: </h5>
                                <h5 style="font-size:12px"><?php 
                                        
                                        if($row['titulo']==""){

                                            echo "Sin titulo";
                                        }else{
                                              echo $row['titulo'];

                                        }
                                        ?>
                                    
                                </h5>
                                <h5 style="font-size:14px;">Descripción: </h5>
                                <p style="text-align: left;"><?php 
                                     
                                        if($row['descripcion']==""){
                                            echo "Sin Contenido de Texto";

                                        }else{
                                            echo $row['descripcion'];
                                                
                                        }?>.....
                                </p>
                                
                                
                                <a style="visibility:hidden"><i style="visibility:hidden" class="fa fa-pencil "></i></a>                
                                <a style="" href="delete?note=<?php echo $row['id'] ?>" name="post"><i class="fa fa-trash-o "></i></a>
                                <a style="margin-left: -10px;right: 40px !important;" href="editar?note=<?php echo $row['id'] ?>" name="post"><i class="fa fa-pencil "></i></a>
                                
                            </div>
                        </li>
                   
                    <?php }} ?>
                        
                        
                     
                       
                        
                    </ul>
                </div>
            </div>
        </div>
       
 </div>
 <script>

</script>
