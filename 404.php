<!DOCTYPE html>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="text-center div-error">
            <p class="_404">404</p>
            <p class="_1">ESTA PAGINA</p>
            <p class="_2">NÃO EXISTE</p>
            <a href="<?php echo get_home_url(); ?>" class="btn btn-danger">VOLTAR PARA A PÁGINA INICIAL</a>
        </div>
    </div>
</body>
</html>