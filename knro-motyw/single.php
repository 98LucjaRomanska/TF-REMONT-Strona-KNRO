<?php get_header(); ?>

<main class="container" style="padding-top: 4rem; padding-bottom: 6rem; max-width: 800px; margin: 0 auto;">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article class="single-post">
            <!-- Tytuł wpisu -->
            <h1 style="font-family: var(--font-heading); font-size: 2.5rem; color: var(--color-dark-bg); margin-bottom: 2rem; text-align: center;">
                <?php the_title(); ?>
            </h1>
            
            <!-- Główne zdjęcie wpisu -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin-bottom: 3rem; border-radius: var(--radius-md); overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: auto; display: block;']); ?>
                </div>
            <?php endif; ?>

            <!-- Właściwa treść relacji -->
            <div class="single-post__content" style="line-height: 1.8; color: var(--color-text); font-size: 1.1rem;">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>