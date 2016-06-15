<div class="row">
    <?php if (isset($productos)): ?>
        <div class="col-md-14 col-sm-14 col-xs-14">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de Productos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Fecha Ingreso</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productos as $pro): ?>
                                <tr>
                                    <td><?php echo $pro ['Id'] ?></td>
                                    <td><a style="font-weight: bold" href="index.php?Controller=ProductoController&Action=producto&id=<?php echo $pro['Id'] ?>"><?php echo $pro ['Nombre'] ?></a></td>
                                    <td><?php echo $pro ['Tipo'] ?></td>
                                    <td><?php echo $pro ['Fecha'] ?></td>
                                    <td><?php echo $pro ['Estado'] ?></td>
                                    <td>
                                        <a href="index.php?Controller=ProductoController&Action=actualizar&id=<?php echo $pro ['Id'] ?>">
                                            <button class="btn btn-warning btn-xs" type="button">
                                                <i class="fa fa-pencil-square"></i>
                                            </button>
                                        </a>
                                        <?php if ($pro['Estado'] == 1): ?>
                                            <a href="index.php?Controller=ProductoController&Action=desactivar&id=<?php echo $pro ['Id'] ?>">
                                                <button type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        <?php else : ?>
                                            <a href="index.php?Controller=ProductoController&Action=activar&id=<?php echo $pro ['Id'] ?>">
                                                <button type="button" class="btn btn-success btn-xs">
                                                    <i class="fa fa-plus-square"></i>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    <?php else: ?>
        <div class="col-md-14 col-sm-14 col-xs-14">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Buscar Productos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="defaultForm" enctype="multipart/form-data" method="POST" action="" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ingrese su busqueda</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <input type="checkbox" class="flat" name="desac" value="X"> Buscar en desactivados
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="submit" class="btn btn-primary" name="submit" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</div>