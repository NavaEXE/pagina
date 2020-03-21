 <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$clientes = TableRegistry::getTableLocator()->get('Clientes');
$query = $clientes->find(); 
$numero=0;
foreach ($query as $row) {
    
    $numero=$numero+1;
   
}

             ?>
    <div id="page-wrapper" class="gray-bg1 gray-bg">
    
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Clientes</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Directorio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Clientes</a>
                        </li>
                    </ol>
                  
                
                </div>
        
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                 <div id="tamaño" class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Clientes</h2>
                            <p>
                                Todos los clientes deben ser verificados antes de que pueda enviar un correo electrónico y configurar un proyecto.
                            </p>
                            <div class="input-group">
                             <button data-toggle="modal" type="button" class="btn btn btn-primary" href="#victorModal"> <i class="fa fa-user-plus"></i> Crear</button>
                             <button style="margin-left:3px" data-anijs="if: click, do: flipInY, to: .container-box" id="buscarboton" data-toggle="modal" href="" type="button" class="buscar btn btn btn-primary"> <i class="fa fa-search"></i> Buscar</button>
                             <button style="margin-left:3px" id="cerrarbuscar" data-toggle="modal" href="" type="button" class="cerrarbuscar menu-oculto btn btn btn-danger"> <i class="fa fa-window-close"></i>Cancelar</button>
                            
                            </div>
                            <div class="clients-list">
                     
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Companies</a></li>
                                <li id="filtros" class="filtros1" style="float: right;    margin-top: -66px;">  <span style="font-size:12px" class="float-right small text-muted"><?php echo $numero?> Contactos</span>
                                <select id="filtro" class="filtro" name="filtro">
                                <option value="reciente" selected>Mas Reciente</option>
                                <option value="antiguo">Mas Antiguo</option>
                                </select></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <?php echo $this->element('vista_lista_cliente')?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <tr>
                                                    <td><a href="#company-1" class="client-link">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
         <div id="buscarvista" class="menu-oculto col-sm-4 ">
                     <?php   echo $this->element('busqueda2');?>
                     
                </div> 
            </div>
        </div>
        
       <div id="victorModal" class="modal fade">
    <div class="modal-dialog" style="max-width: 1034px !important;
    margin: 6.75rem auto">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Agregar Nuevo Cliente</h4>
                <button style="color: #000;width: 55px;height: 34px;margin-left: 0px;" type="button" class="btn btn-danger close" data-dismiss="modal" aria-hidden="true">
                    <h1 style="margin-left: -9px;margin-top: -11px;width: 55px;height: 48px;" class="botonclose">&times;</h1>
                </button>
            </div>
            <div>

               <?php
                echo $this->element('agregar_cliente');

              ?>
            </div>
           
        </div>
    </div>
</div>
   <script src="/webroot/js/search2.js"></script>