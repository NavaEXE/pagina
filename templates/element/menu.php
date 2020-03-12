<?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$perfiles = TableRegistry::getTableLocator()->get('Perfil');
$query = $perfiles->find();


foreach ($query as $row) {
    if($row['id_usuario']==$user['id']){
        $nombre = $row['nombre'];
        $app = $row['apellido_paterno'];
        $apm = $row['apellido_materno'];

        
    }
    
}

            
             ?>
           
   <div id="wrapper" class="menu-oculto">
    <nav style="position:fixed" class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img style="width: 125%;margin-left: -15%; top: 88px !important;" alt="image" class="rounded-circle" src="/webroot/img/logo3.png"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $nombre ?> <?php echo $app ?> <?php echo $apm ?></span>
                            <span class="text-muted text-xs block">Opciones<b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs" style="top: 0px !important;">
                            <li><a class="dropdown-item" href="/Perfil/index">Mi cuenta</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contactos</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mensajes</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/users/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        SA
                    </div>
                </li>
                   <li id="menu_escritorio" class="">
                    <a href="/escritorio/home"><i class="fa fa-desktop"></i> <span class="nav-label">Escritorio</span><span class="float-right label label-primary">Home</span></a>
                </li>
                <li id="menu_directorio">
                    <a href="#"><i class="fa fa-th-large"></i><span class="nav-label">Directorio</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li id="menu_contactos"><a href="/directorio/contactos">Contactos</a></li>
                        <li id="menu_clientes"><a href="/directorio/clientes">Clientes</a></li>
                        <li id="menu_provedores"><a href="/directorio/provedores">Provedores</a></li>
                        <li id="menu_usuarios"><a href="/directorio/usuarios">Usuarios</a></li>
                    </ul>
                </li>
                <li class="special_link">
                    <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Configuracion</span></a>
                </li>
            </ul>
        </div>
    </nav>
 
     <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; position: fixed; z-index: 999;width:88%">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <img style="width: 170px;margin-left:5px" src="/webroot/img/newlogo2.png" alt="">
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                   
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                          
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                              
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="/users/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>




        </div>
       
        </div>

