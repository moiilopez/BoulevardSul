<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Insertar Articulo <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="defaultForm" enctype="multipart/form-data" method="POST" action="" class="form-horizontal">
                    <?php
                    if (isset($msj)) :
                        if ($msj == "ok"):
                            ?>
                            <div class="alert alert-success">
                                <button class="close" data-dismiss="alert">x</button>
                                <p>Producto registrado con Exito</p>
                            </div>
                        <?php else : ?>
                            <div class="alert alert-danger">
                                <button class="close" data-dismiss="alert">x</button>
                                <p>Error, no se pudo registrar</p>
                            </div>    
                        <?php
                        endif;
                    endif;
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Titulo</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="titulo" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Resumen</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="resumen" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Texto</label>
                        <div class="col-sm-5">
                            <textarea type="text" class="form-control" name="texto"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Imagen</label>
                        <div class="col-sm-5">
                            <input type="file" name="imagen" class="btn-default btn-file" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" class="btn btn-primary" name="submit" value="Ingresar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>