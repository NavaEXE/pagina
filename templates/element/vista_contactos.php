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
           
                
           
        <div>
        
                     <?php  $variable = base64_decode($_REQUEST['var']);
                             foreach ($query as $row) {
                             if($row['id']==$variable){
                                 
                                 
                             
                                ?>
                          
               
                <div class="col-lg-12">
        
                        <div class="ibox-content" style="  padding: 0px 0px 0px 10px;">
              <div class="ibox-content col-lg-12" style="float:left;border-style:hidden !important;margin-bottom: -25px;">



             <header></header>
              <div class="wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Contacto</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Directorio
                        </li>
                         <li class="breadcrumb-item">
                            <a href="./">Contactos</a>
                        </li>
                         <li class="breadcrumb-item">
                            Contacto
                        </li>
                       
                    </ol>
                    <buton href="#victorModal3" data-toggle="modal" class="btn btn-primary editar"><i class="fa fa-pencil"></i> Editar</buton>
                     <a href="/contactos/delete?var=<?php echo $_REQUEST['var']?>" class="btn btn-danger delete"><i class="fa fa-trash"></i> Eliminar</a>
                </div>
                
            </div>
            
    <div class="col-lg-1" style="float:left;margin-right:1%;margin-top:15px">
                       
                        <section id="Images" >

                                <div class="row" >

                                    <div >

                                        <div style="border-radius: 21%!important;border-radius: 100%!important;" >

                                              <img style="    width: 100px;
    margin-left: 27px;height: 100px;" alt="image" class="rounded-circle" src="<?php 
                        if($row['url_imagen']=="/webroot/img/contactos/"){
                            
                            echo "/webroot/img/a3.png";
                        }else{
                            
                             echo $row['url_imagen'];
                        }
                        ?>">
                                        </div>
                                  
                                  
                                    </div>
                                </div>

                        </section>
                    </div>
                    
                    
                <main class="col-sm-1" style="float:left;margin-top:15px">
                
                             <div > 
                                <div class="">
                                    <h3>Nombre: </h3>
                                    </div> 
                                    <div class=""><h3>Apellido Paterno: </h3>
                                    </div>
                                    <div class=""><h3>Apellido Materno: </h3>
                                    </div>    
                                    <div class=""><h3>Titulo: </h3>
                                    </div>  
                                    <div class=""><h3>RFC: </h3>
                                    </div>    
                                    <div class=""><h3>CURP: </h3>
                                    </div>      
                                     
                                 </div>
                                        
                      
                                  
                                    
        
                              
                </main>
                            
                <main style="float:left;margin-top:15px" class="col-sm-2">
                
                             <div style="border-left-style: outset;" > 
                               <div style="margin-left:6px">
                                <div class="">
                                    <h3><?php echo $row['nombre']?> </h3>
                                    </div> 
                                    <div class=""><h3><?php echo $row['apellido_paterno']?> </h3>
                                    </div>
                                    <div class=""><?php if($row['apellido_materno']!=null){ ?><h3><?php echo $row['apellido_materno']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>    
                                    <div class=""><?php if($row['titulo']!=null){ ?><h3><?php echo $row['titulo']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>  
                                    <div class=""><?php if($row['rfc']!=null){ ?><h3><?php echo $row['rfc']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>    
                                    <div class=""><?php if($row['curp']!=null){ ?><h3><?php echo $row['curp']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>      
                                     </div>    
                                 </div>
                                        
                      
                                  
                                    
        
                              
                </main>
                    
                 <main class="col-sm-1" style="float:left;margin-top:15px">
                
                             <div > 
                                <div class="">
                                    <h3>Email: </h3>
                                    </div> 
                                <div class="">
                                    <h3>Tel. Oficina: </h3>
                                    </div> 
                                     <div class="">
                                    <h3>Celular: </h3>
                                    </div> 
                                <div class="">
                                    <h3>Direccion: </h3>
                                    </div> 
                                    
                                 </div>
                                        
                      
                                  
                                    
        
                              
                </main>
                        
                <main style="float:left;margin-top:15px" class="col-sm-2">
                
                             <div style="border-left-style: outset;" > 
                               <div style="margin-left:6px">
                                  <div class=""><?php if($row['email']!=null){ ?><h3><?php echo $row['email']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>
                                     <div class=""><?php if($row['telefono']!=null){ ?><h3><?php echo $row['telefono']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>  
                                    <div class=""><?php if($row['celular']!=null){ ?><h3><?php echo $row['celular']?> </h3><?php }else{ ?><h3>n/a</h3><?php }?>
                                    </div>
                                     
                                <div class="">
                                    <h3><?php echo $row['calle']?> <?php echo $row['numero_externo']?> <?php echo $row['numero_interno']?> <?php echo $row['colonia']?>  </h3>
                                    </div>   
                                     <div class=""><h3><?php echo $row['municipio']?> <?php echo $row['estado']?></h3>
                                    </div>  
                                    <div class=""><h3><?php echo $row['pais']?> </h3>
                                    </div>          
                                     </div>    
                                 </div>
                                        
                      
                                  
                                    
        
                              
                </main>
                      
                    <div class="col-lg-12" style="float: left;background-color: #ffffff;color: inherit;border-top-color: #e7eaec; border-image: inherit;border-top-style: solid;border-top-width: 1px;">
                              <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-address-card-o"></i>Contactos</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-window-restore"></i></a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-3"><i class="fa fa-list"></i></a></li>
                            
                            </ul>                                  
                       
                               
                                    
                           
                        
                        </div>
                     
                    </div>
                   
                </div>
                
                     <?php   }
                                
                             }
                               ?>
                              
        </div>
          
                             
 <!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal3" class="modal fade">
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
                echo $this->element('editar_contacto');

              ?>
            </div>
           
        </div>
    </div>
</div>

   
        
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

   
  
 

