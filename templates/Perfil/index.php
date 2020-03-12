<?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$perfiles = TableRegistry::getTableLocator()->get('Perfil');
$query = $perfiles->find();


foreach ($query as $row) {
    if($row['id_usuario']==$user['id']){
        $imagen = $row['url_imagen'];
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
        $sb = $row['sobre_mi'];
        
    }
    
}
            $newDate = date("Y-m-d", strtotime($fecha));

            
             ?>
        <div id="page-wrapper" class="gray-bg1 gray-bg">
        <div class="row border-bottom">

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Mi Cuenta</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/Perfil/index">Inicio</a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Perfil</h5>
                        </div>
                        <div>
                            <div style="text-align:center" class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-fluid" src="<?php 
                                                                        if($imagen=="/webroot/img/perfil/"){
                                                                            
                                                                            echo "/webroot/img/loogo_perfil.jpg";
                                                                        }else{
                                                                            echo $imagen;
                                                                            
                                                                        }
                                                                        ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo $nombre?> <?php echo $app?> <?php echo $apm?></strong></h4>
                                <p><i class="fa fa-map-marker"></i> <?php echo $calle?> <?php echo $nume?> <?php echo $mun?> <?php echo $estado?> </p>
                                <h5>
                                    Sobre mi
                                </h5>
                                <p>
                                   <?php if($sb==""){
                                        
                                        echo "Sin descripcion.";
    
                                    }else{
    
                                    echo $sb; }?>
                                </p>
                                <div style="margin-bottom:30px;margin-left: 25px;" class="row m-t-lg">
                                    <div class="col-md-4">
                                        <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>169</strong> Posts</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>28</strong> Following</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                        <h5><strong>240</strong> Followers</h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button style="font-size:14px" type="button" class="editar_perfil btn btn-primary btn-sm btn-block"><i class="fa fa-pencil editar-perfil"></i> Editar Perfil</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button style="font-size:14px" type="button" class="btn btn-secondary btn-sm btn-block"><i class="fa fa-eye"></i> Ver Perfil</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Activites</h5>
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

                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a1.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy">1m ago</small>
                                            <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                            <div class="actions">
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a href="" class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">5m ago</small>
                                            <strong>Monica Smith</strong> posted a new blog. <br>
                                            <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a2.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                            <div class="float-right">
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                <a href="" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a3.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                            <div class="photos">
                                                <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="/webroot/img/p1.jpg"></a>
                                                <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="/webroot/img/p3.jpg"></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a5.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                            <div class="float-right">
                                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="/webroot/img/a7.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
   
        </div>
  