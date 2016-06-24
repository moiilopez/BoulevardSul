<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Boulevard Sul</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="View/Page/PageTemplate/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="View/Page/PageTemplate/css/component.css" />
        <script src="View/Page/PageTemplate/js/modernizr-custom.js"></script>
    </head>
    <body>
        <!-- navigation -->
        <nav class="pages-nav">

            <div class="pages-nav__item"><a class="link link--page" href="#page-home">Inicio</a></div>

            <?php foreach ($productos as $row): ?> 
                <div class="pages-nav__item"><a class="link link--page" href="<?php echo '#' . $row['Id']; ?>"><?php echo $row['Nombre']; ?></a></div>
            <?php endforeach; ?>

            <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Como Comprar</a></div>
            <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Novidades</a></div>
            <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contato</a></div>
            
        </nav>
        <!-- /navigation-->
        <!-- pages stack -->
        <div class="pages-stack">
            <!-- page -->
            <div class="page" id="page-home">
                <!-- Blueprint header -->
                <header class="bp-header cf">
                    <h1 class="bp-header__title">Boulevard Sul</h1>
                    </br><h1 class="bp-header__desc"><?php echo $productos[0]['Tip'] ?></h1>
                    <nav class="bp-nav">
                        <a class="bp-nav__item bp-icon bp-icon--prev" href="index.php" data-info="Pagina de Inicio"></a>
                    </nav>
                </header>
                <img class="poster" src="View/Img/Portfolio/<?php echo $productos[0]['Imagen'] ?>" alt="img01" />
            </div>
            <!-- /page -->

            <?php foreach ($productos as $row): ?> 
                <div class="page" id="<?php echo $row['Id']; ?>">
                    <header class="bp-header cf">
                        <h1 class="bp-header__title"><?php echo $row['Nombre']; ?></h1>
                        <p class="info">
                            <?php echo $row['Descripcion']; ?>
                        </p>
                        <nav class="bp-nav">
                            <a class="bp-nav__item bp-icon bp-icon--prev" href="index.php" data-info="Pagina de Inicio"></a>
                        </nav>
                    </header>
                    <img class="poster" src="View/Img/Portfolio/<?php echo $row['Imagen']; ?>" />
                </div>
            <?php endforeach; ?>

            <div class="page" id="page-blog">
                <header class="bp-header cf">
                    <h1 class="bp-header__title">Blog &amp; News</h1>
                    <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
                    <p class="info">
                        "The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
                    </p>
                </header>
                <img class="poster" src="images/1.jpg" alt="img01" />
            </div>
            <div class="page" id="page-contact">
                <header class="bp-header cf">
                    <h1 class="bp-header__title">Contact</h1>
                    <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
                    <p class="info">
                        "Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them." &mdash; Samuel Butler
                    </p>
                </header>
                <img class="poster" src="images/4.jpg" alt="img04" />
            </div>
        </div>
        <!-- /pages-stack -->
        <button class="menu-button"><span>Menu</span></button>
        <script src="View/Page/PageTemplate/js/classie.js"></script>
        <script src="View/Page/PageTemplate/js/main.js"></script>
    </body>
</html>

