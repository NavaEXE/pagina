 <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$contactos = TableRegistry::getTableLocator()->get('Contactos');
$query = $contactos->find(); 
$numero=0;
foreach ($query as $row) {
    
    $numero=$numero+1;
   
}

             ?>
             
    <div style="margin-top:-5px" id="page-wrapper" class=" gray-bg1 gray-bg">
        <div  style="padding: 0px 10px 40px;" class="contac     wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div id="tamaño" class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
  
                            <h2>Contactos</h2>
                             <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Directorio</a>
                        </li>
                        <li class="breadcrumb-item">
                            Contactos
                        </li></ol>
                            <p>
                                Todos los clientes deben ser verificados antes de que pueda enviar un correo electrónico y configurar un proyecto.
                            </p>
                            
                            
                          <button data-toggle="modal" type="button" class="btn btn btn-primary" href="#victorModal"> <i class="fa fa-user-plus"></i> Crear</button>
                            <button data-anijs="if: click, do: flipInY, to: .container-box" id="buscarboton" data-toggle="modal" href="" type="button" class="buscar btn btn btn-primary"> <i class="fa fa-search"></i> Buscar</button>
                             <button  id="cerrarbuscar" data-toggle="modal" href="" type="button" class="cerrarbuscar menu-oculto btn btn btn-danger"> <i class="fa fa-window-close"></i>Cancelar</button>
                            
                            
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-address-card-o"></i></a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-window-restore"></i></a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#tab-3"><i class="fa fa-list"></i></a></li>
                                <li id="filtros" class="filtros1" style="float: right;">  <span style="font-size:12px" class="float-right small text-muted"><?php echo $numero?> Contactos</span>
                                <select id="filtro" class="filtro" name="filtro">
                                <option value="reciente" selected>Mas Reciente</option>
                                <option value="antiguo">Mas Antiguo</option>
                                </select></li>
                                
                            
                            </ul>
                            <div id="#filtroscontactos"></div>
                            <div style="overflow:auto" class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-hover">
                                                <tbody>
                                                <?php echo $this->element('vista_bloque_contactos')?>
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
                                                <?php echo $this->element('vista_bloque_chico_contactos')?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                                <div id="tab-3" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                 <?php echo $this->element('vista_lista_contactos')?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                             
                                <br>
                                <br>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="buscarvista" class="menu-oculto col-sm-4 ">
                     <?php   echo $this->element('busqueda');?>
                     
                </div>   
                </div>
            </div>
        </div>
    <script>
       
        $(document).ready(function () {
             var URLactual = window.location.pathname;
  
        });
    </script> 

        <script src="/webroot/js/search.js"></script>
        <!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal" class="modal fade">
    <div class="modal-dialog" style="max-width: 1034px !important;
    margin: 21.75rem auto">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Agregar Nuevo Contacto</h4>
                <button style="color: #000;width: 55px;height: 34px;margin-left: 0px;" type="button" class="btn btn-danger close" data-dismiss="modal" aria-hidden="true">
                    <h1 style="margin-left: -9px;margin-top: -11px;width: 55px;height: 48px;" class="botonclose">&times;</h1>
                </button>
            </div>
            <div>

               <?php
                echo $this->element('agregar_contacto');

              ?>
            </div>
           
        </div>
    </div>
</div>



    <script>
        $(document).ready(function(){
            $('#bloquefiltro').val();
            alert(fil);
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