<?php
/*
Template Name: Aktualności - Lista
*/
get_header(); 
?>

<!-- Jasna sekcja z tłem dla spójności -->
<main id="main-content" class="news-section" style="padding-top: 6rem; padding-bottom: 6rem;">
    <div class="holder">
        <!-- Siatka na kafelki -->
        <div class="news-grid-page">
            <?php 
            // Paginacja (numeracja stron)
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            
            // Pobieramy 12 najnowszych wpisów na stronę
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 12,
                'paged'          => $paged
            );
            $news_query = new WP_Query($args);

            if ( $news_query->have_posts() ) : 
                while ( $news_query->have_posts() ) : $news_query->the_post(); 
            ?>
                
                <!-- KAFELEK 1:1 ze stroną główną -->
                <article class="news-item" role="listitem">
                    <div class="news-item__thumb">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium', array('style' => 'object-fit: cover; width: 100%; height: 100%; border-radius: 6px 6px 0 0;')); ?>
                        <?php else : ?>
                            <div class="placeholder placeholder--news-thumb" aria-hidden="true">Brak miniaturki</div>
                        <?php endif; ?>
                    </div>
                    
                    <h3 class="news-item__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </article>

            <?php 
                endwhile; 
            ?>
        </div><!-- /.news-grid-page -->

        <!-- Paginacja (Strona 1, 2, 3...) -->
        <div class="aktualnosci-pagination">
            <?php 
                echo paginate_links( array(
                    'total'     => $news_query->max_num_pages,
                    'prev_text' => '« Poprzednie',
                    'next_text' => 'Następne »'
                ) ); 
            ?>
        </div>

        <?php
            wp_reset_postdata(); 
            else : 
        ?>
            <p style="text-align: center; grid-column: 1 / -1; padding: 20px;">Brak aktualności do wyświetlenia.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>