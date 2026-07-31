<?php get_header(); ?>

<main id="main-content" class="container" style="padding-top: 3rem; padding-bottom: 4rem; min-height: 60vh;">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="page-content" style="line-height: 1.8;">
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>