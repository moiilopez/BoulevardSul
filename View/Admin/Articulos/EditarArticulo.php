<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Actualizar Articulo <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php if (isset($articulo) && $articulo): ?>
                <div class="x_content">
                    <br />
                    <form id="defaultForm" enctype="multipart/form-data" method="POST" action="" class="form-horizontal">
                        <?php
                        if (isset($msj)) :
                            if ($msj == "ok"):
                                ?>
                                <div class="alert alert-success">
                                    <button class="close" data-dismiss="alert">x</button>
                                    <p>Producto actualizado con Exito</p>
                                </div>
                            <?php else : ?>
                                <div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert">x</button>
                                    <p>Error, no se pudo actualizar</p>
                                </div>    
                            <?php
                            endif;
                        endif;
                        ?>
                        <div class="col-sm-10">
                            <input type="text" name="id" value="<?php echo $articulo ['Id'] ?>" hidden>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Id</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nom" value="<?php echo $articulo ['Id'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Titulo</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="titulo" value="<?php echo $articulo ['Titulo'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Resumen</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="resumen" value="<?php echo $articulo ['Resumen'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Texto</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="texto" rows="4" cols="50"><?php echo $articulo ['Texto'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Imagen</label>
                                <div class="col-sm-6">
                                    <img src="View/Img/Articulos/<?php echo $articulo['Imagen'] ?>" style="width: 50%"/>
                                    <br><br>
                                    <input type="file" name="imagen" class="btn-default" id="nueva" accept="image/*">
                                    <input type="button" class="btn btn-default" id="boton" value="cambiar imagen">
                                </div>
                            </div>
                            <input type="hidden" name="actual" value="<?php echo $articulo ['Imagen'] ?>">
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Actualizar">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <?php
            else:
                echo '<div class="alert alert-danger">'
                . '<button class="close" data-dismiss="alert">x</button>'
                . '<p>Sin datos para editar</p>'
                . '</div>';

            endif;
            ?>

        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#nueva").hide();

        $("#boton").click(function () {
            $("#boton").hide();
            $("#nueva").show();
        });
    });
</script>