<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>
    
    <?php
        if(have_posts()) :
            while (have_posts()) : the_post();
    ?>

    <div class="container-fluid bg-general-header">
        <div class="container py-4">
            <header class="col-md-14">
                <h1 class="text-center text-light">
                    <?php the_title(); ?>
                    <span class="underline"></span>
                </h1>
                <p class="text-light text-center">
                    <?php 
                        $postid = get_the_ID();
                        if(get_post_meta( $postid, 'subtitulo', true )) {
                            echo get_post_meta( $postid, 'subtitulo', true );
                        }
                    ?>
                </p>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="card my-3">
            <div class="card-body">
                <div class="py-3 px-3">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php
            endwhile;
        endif;
    ?>

<?php get_footer(); ?>