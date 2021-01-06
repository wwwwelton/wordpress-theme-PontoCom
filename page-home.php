<?php get_header(); ?>
    <?php masterslider(11); ?>
    
    <!-- Noticias em Destaque -->
    <div class="container-fluid">
        <div class="container">
            <section class="py-4">
                <header class="title">
                    <h2 class="text-center">Últimas Notícias <span class="underline"></span></h2>
                    <p class="text-center">Acompnahe tudo que acontece.........</p>
                </header>
                <div class="row">
                    <?php
                    $destaque = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8));
                    if($destaque->have_posts()):
                        while($destaque->have_posts()): $destaque->the_post();
                    ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <?php the_post_thumbnail('', array('class' => 'img-fluid card-img-top')); ?>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php the_title(); ?></h5>
                                <?php echo '<p class="card-text text-justify">' . get_the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-link">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </section>
        </div>
    </div>

<?php get_footer(); ?>