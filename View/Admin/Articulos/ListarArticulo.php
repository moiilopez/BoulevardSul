<div class="row">
    <?php if (isset($articulos)): ?>
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
                                <th>Titulo</th>
                                <th>Resumen</th>
                                <th>Texto</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articulos as $art): ?>
                                <tr>
                                    <td><?php echo $art ['Id'] ?></td>
                                    <td><a style="font-weight: bold" href="index.php?Controller=ArticuloController&Action=articulo&id=<?php echo $art['Id'] ?>"><?php echo $art ['Titulo'] ?></a></td>
                                    <td><?php echo $art ['Resumen'] ?></td>
                                    <td><?php echo $art ['Texto'] ?></td>
                                    <td><?php echo $art ['Fecha'] ?></td>
                                    <td>
                                        <a href="index.php?Controller=ArticuloController&Action=actualizar&id=<?php echo $art ['Id'] ?>">
                                            <button class="btn btn-warning btn-xs" type="button">
                                                <i class="fa fa-pencil-square"></i>
                                            </button>
                                        </a>
                                        <a href="index.php?Controller=ArticuloController&Action=eliminar&id=<?php echo $art ['Id'] ?>">
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
    <?php else: ?>
        
    <?php endif; ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</div>