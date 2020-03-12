

       <?php
            
            
            use Cake\ORM\TableRegistry;

$user = $this->request->getAttribute('identity');
$escritorio = TableRegistry::getTableLocator()->get('Escritorio');
$query = $escritorio->find();
  $id=$_GET['note'];

foreach ($query as $row) {
    if($row['id_usuario']==$user->id){
        if($row['id']==$id){
        $nombre = $row['nombre'];
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
        $texto = $row['texto'];

        }
    }
    
}
          

            
             ?>
             
             
             <style>
                 .table{

                     background: #1ab394 !important;
                 }
                 tr{
                     color:white;
                     
                 }
</style>
        <div id="page-wrapper" class="gray-bg1 gray-bg">
        <div class="wrapper wrapper-content">
        <div style="margin-top:-24px" class="row">

            <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
       
                <h2>
                    Nueva Nota
                </h2>
            </div>
                <div class="mail-box">


                <div class="mail-body">

                    <form method="post">
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Nombre:</label>
                     
                             
                            <div class="col-sm-10"><input maxlength="25" type="text" value="<?php echo $nombre ?>" class="form-control" Placeholder="Nombre" name="nombre"></div>
                
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Titulo:</label>

                            <div class="col-sm-10"><input maxlength="25" value="<?php echo $titulo ?>" type="text" class="form-control" placeholder="Titulo" name="Titulo"></div>
                        </div>
                             <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción:</label>

                            <div class="col-sm-10"><input maxlength="75" value="<?php echo $descripcion ?>" type="text" class="form-control" placeholder="Descripción" name="descripcion"></div>
                        </div>
                         
                         
                         
                          <textarea name="texto" class="summernote">
                         <?php echo $texto ?>
                      

                        </textarea>
                         <div class="mail-body text-right tooltip-demo">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        <a href="home" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Cancelar</a>
                    </div>
                        </form>

                </div>

                    <div class="clearfix"></div>



                </div>
            </div>
        </div>
        </div>

        </div>
   