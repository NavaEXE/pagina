 <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- Booststrap -->

    <!--  /Booststrap -->

    <link rel="stylesheet" href="/webroot/css/icons.css">
    <link rel="stylesheet" href="/webroot/css/grid.css">
    <link rel="stylesheet" href="/webroot/css/modal.css">
    <link rel="stylesheet" href="/webroot/css/styles.css">
        <div id="page-wrapper" class="gray-bg1 gray-bg">
        <div class="row border-bottom">
<?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$perfiles = TableRegistry::getTableLocator()->get('Perfil');
$query = $perfiles->find();


foreach ($query as $row) {
     
    if($row['id_usuario']==$user['id']){
        $nombre = $row['nombre'];
        $app = $row['apellido_paterno'];
        $app = $row['apellido_paterno'];
        $apm = $row['apellido_materno'];
        $fecha = $row['fecha_nacimiento'];
        $rfc = $row['rfc'];
        $curp = $row['curp'];
        $calle = $row['calle'];
        $colonia = $row['colonia'];
        $mun = $row['municipio'];
        $numi = $row['numero_interno'];
        $nume = $row['numero_externo'];
        $cp = $row['codigo_postal'];
        $estado = $row['estado'];
        $pais = $row['pais'];
        $tel = $row['telefono'];
        $cel = $row['celular'];
        $img = $row['url_imagen'];
        $sb = $row['sobre_mi'];
        
    }
    
}
            $newDate = date("Y-m-d", strtotime($fecha));
         

            
             ?>
             

             <style>
            
                 input{
                     
                     font-size: 14px !important;
                 }
                 button{
                     
                     font-size: 14px !important;
                 }
                 textarea{
                     font-size: 14px !important;
                     
                 }
                 
               
            </style>
        </div>
           
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Editar Perfil</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/Perfil/index">Mi Cuenta</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/Perfil/editar">Editar Perfil</a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
              <form method="POST" enctype="multipart/form-data">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                     
                        <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Imagen de perfil</h5>
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

                                  <main>
        <div class="container">
            <section id="Images" class="images-cards">
        
                    <div class="row">
                       
                        <div class="col-xl-12" id="add-photo-container">
                            <div style="filter: invert(1);" class="add-new-photo first" id="add-photo">
                                <span><i class="icon-camera"></i></span>
                            </div>
                            <input value="<?php echo $img?>" type="file" multiple id="add-new-photo" name="imagen" accept="image">
                        </div>
                    </div>
        
            </section>
        </div>
    </main>
                            
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Información Personal</h5>
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
                        
                    
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo $nombre ?>" class="form-control" name="nombre" required></div>
                                      <div class="errorMessages"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Apellido Paterno</label>
                                    <div class="col-sm-10"><input value="<?php echo $app ?>" type="text" class="form-control" name="apellido_paterno" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Apellido Materno</label>

                                    <div class="col-sm-10"><input value="<?php echo $apm ?>" type="text" class="form-control" name="apellido_materno" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                                    <div class="col-sm-5"><input value="<?php echo $newDate ?>" style="width:84%" type="date" placeholder="placeholder" class="form-control" name="fecha_nacimiento" required></div>
                                      <label style="margin-left:-6%" class="col-sm0 col-form-label">RFC</label>
                                    <div style="margin-right: 1%;" class="col-sm-3">
                                    <input value="<?php echo $rfc ?>" style="width:96%" type="text" class="form-control" name="rfc" required></div>
                                     <label style="margin-left:-1%" class="col-sm0 col-form-label">CURP</label>

                                    <div class="col-sm-2"><input value="<?php echo $curp ?>" style="width:115%" type="text" class="form-control" name="curp" required></div>
                                </div>
                           
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Dirección</label>
                                    <div class="col-sm-10">
                                    <input value="<?php echo $calle ?>" style="width: 20%;float:left;" type="text" class="form-control" name="calle" placeholder="Calle">
                                     <input value="<?php echo $colonia ?>" style="width: 20%;float:left;margin-left:1%;" type="text" class="form-control" name="colonia" placeholder="Colonia" required>
                                    <input value="<?php echo $numi ?>" style="width: 30%;float:left;margin-left:2%;"type="text" class="form-control" name="numero_interno" placeholder="Numero interno" required>
                                    <input value="<?php echo $nume ?>" style="width: 25%;float: left;margin-left: 2%;" type="text" class="form-control" name="numero_externo" placeholder="Numero externo" required>
                                    </div>
                                </div>
                                   <div class="form-group row"><label class="col-lg-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                    <input value="<?php echo $cp ?>" style="width: 15%;float:left;" type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" required>
                                    <input value="<?php echo $mun ?>" style="width: 24%;float:left;margin-left:2%;"type="text" class="form-control" name="municipio" placeholder="Ciudad/municipio" required>
                                    <input value="<?php echo $estado ?>" style="width: 30%;float: left;margin-left: 2%;" type="text" class="form-control" name="estado" placeholder="Estado" required>
                                    <input value="<?php echo $pais ?>" style="width: 25%;float: left;margin-left: 2%;" type="text" class="form-control" name="pais" placeholder="Pais" required>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                              <div style="float:left" class="form-group row">
                                    <label class="col-sm-2 col-form-label">Telefono de casa</label>
                                    <div style="margin-right: 2%;" class="col-sm-4">
                                    <input value="<?php echo $tel ?>" style="width:100%" type="text" class="form-control" name="telefono" required>
                                    </div>
                                    <label class="col-sm-1 col-form-label">Celular</label>

                                    <div class="col-sm-4"><input value="<?php echo $cel ?>" style="width:100%" type="text" class="form-control" name="celular" required></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                 
                              <div style="float:left;margin-top:3%;margin-bottom:5%;" class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sobre mi</label>
                                    <div style="margin-right: 2%;" class="col-sm-12">
                                    <textarea  style="width:100%" class="form-control" rows="3" name="sobre_mi"><?php echo $sb ?></textarea>
                                    </div>
                                </div>
                            
                                <div style="margin-top: 5%;" class="hr-line-dashed"></div>
                                   
                     
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        
                                        <button class="bottom btn btn-primary btn-sm" type="submit">Guardar Cambios</button>
                                    </div>
                                </div>
                          
                          <button id="regresar" class="btn btn-danger btn-sm">Regresar</button>
                        </div>
                    </div>
                    
                </div>
                           
            </div>
            
        </div>

 </form> 
        </div>
        
         <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--  /Bootstrap y jQuery -->


    <script src="/webroot/js/modal.js"></script>
    <script src="/webroot/js/functions.js"></script>
    <script src="/webroot/js/scripts.js"></script>

