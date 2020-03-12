<?php $user = $this->request->getAttribute('identity'); ?>
        <div id="page-wrapper" class="gray-bg1 gray-bg">
        <div class="wrapper wrapper-content">
        <div class="row">

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
                     
                             
                            <div class="col-sm-10"><input maxlength="25" type="text" class="form-control" Placeholder="Nombre" name="nombre"></div>
                
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Titulo:</label>

                            <div class="col-sm-10"><input maxlength="25" type="text" class="form-control" placeholder="Titulo" name="titulo"></div>
                        </div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción:</label>

                            <div class="col-sm-10"><input type="text" maxlength="75" class="form-control" placeholder="Descripción" name="descripcion"></div>
                        </div>
                         
                         
                         
                          <textarea name="texto" class="summernote">
                           
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>

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
   