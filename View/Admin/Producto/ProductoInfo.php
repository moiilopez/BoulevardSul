<script>
    $(document).ready(function () {
        $("#submit").hide();

        $("#disp").click(function () {
            $("#submit").show();
        });
    });
</script>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?php echo $producto['Nombre']; ?></h2> 
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-1 col-sm-7 col-xs-12"></div>
                <div class="col-md-6 col-sm-7 col-xs-12">
                    <div class="product-image">
                        <img src="View/Img/Products/<?php echo $producto['Imagen']; ?>" alt="..."/>
                    </div>  
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title"><?php echo $producto['Nombre']; ?></h3>
                    <div class="product_price">
                        <h4 class=""><strong>ID:</strong> <?php echo $producto['Id']; ?></h4>
                        <h4 class=""><strong>Tipo:</strong> <?php echo $producto['Tip']; ?></h4>
                        <h4 class=""><strong>Fecha de ingreso:</strong> <?php echo $producto['Fecha']; ?></h4>
                    </div>
                    <div class="">
                        <div class="product_price">
                            <h4 class=""><strong>Descripcion:</strong></h4>
                            <p><?php echo $producto['Descripcion']; ?></p>
                            <br>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <a href="index.php?Controller=ProductoController&Action=actualizar&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-primary btn-lg">Editar</button></a>
                        <?php if ($producto['Estado'] == 1): ?>
                            <a href="index.php?Controller=ProductoController&Action=desactivar&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-danger btn-lg">Desactivar</button></a>
                        <?php else : ?>
                            <a href="index.php?Controller=ProductoController&Action=activar&id=<?php echo $producto['Id'] ?>"><button type="button" class="btn btn-success btn-lg">Activar</button></a>
                        <?php endif; ?>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>