<link href="View/Admin/Plugins/css/colores.css" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Actualizar Producto <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php if (isset($producto) && $producto): ?>
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
                        <div class="col-sm-2" style="float: right">
                            <a style="float:right" href="index.php?Controller=ProductoController&Action=producto&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-info btn-group-sm">Info Producto</button></a>
                            <br><br><br>
                            <?php if ($producto['Estado'] == 1): ?>
                                <a style="float:right" href="index.php?Controller=ProductoController&Action=desactivar&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-danger btn-group-sm">Desactivar</button></a>
                            <?php else : ?>
                                <a style="float:right" href="index.php?Controller=ProductoController&Action=activar&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-success btn-group-sm">Activar</button></a>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="id" value="<?php echo $producto ['Id'] ?>" hidden>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Id</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nom" value="<?php echo $producto ['Id'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nombre</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $producto ['Nombre'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Seleccionar Tipo</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="tipo" required>
                                        <?php
                                        foreach ($tipos as $tip) :
                                            if ($producto ['Tipo'] == $tip['Id']) :
                                                ?>
                                                <option value="<?php echo $tip['Id'] ?>" selected><?php echo $tip['Nombre'] ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $tip['Id'] ?>" ><?php echo $tip['Nombre'] ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Precio</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="precio" value="<?php echo $producto ['Precio'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Descripcion</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="descripcion" rows="4" cols="50"><?php echo $producto ['Descripcion'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Imagen</label>
                                <div class="col-sm-6">
                                    <img src="Img/Upload/<?php echo $producto['Imagen'] ?>" style="width: 50%"/>
                                    <br><br>
                                    <input type="file" name="imagen" class="btn-default" id="nueva" accept="image/*">
                                    <input type="button" class="btn btn-default" id="boton" value="cambiar imagen">
                                </div>
                            </div>
                            <input type="hidden" name="actual" value="<?php echo $producto ['Imagen'] ?>">
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-4">
                                    <input type="submit" class="btn btn-primary" name="submit "value="Actualizar">
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