<?php
/*
Template Name: Projekt - Badania
*/
get_header(); 
?>

<!-- Ciemny pasek PROJEKTY na samej górze
<div class="project-top-bar" style="background-color: var(--color-dark-bg); color: #ffffff; text-align: center; padding: 1.5rem 0;">
    <h1 style="margin: 0; font-family: var(--font-heading); font-size: 2rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">Projekty</h1>
</div>-->

<main id="main-content" class="container" style="padding-top: 4rem; padding-bottom: 4rem;">
    
    <!-- 1. NAGŁÓWEK PROJEKTU (Logo + Tekst) -->
    <div class="project-header">
        <div class="project-logo">
            <!-- TUTAJ JEST TWOJE NOWE LOGO -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-badania.png" alt="Logo projektu" style="width: 150px; height: 150px; object-fit: contain; background: #fff; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        </div>
        <div class="project-intro">
            <h2 style="color: #2ec24f; font-size: 2.5rem; font-family: var(--font-heading); font-weight: 700; margin-bottom: 1rem;">Badania</h2>
            <p style="color: var(--color-text-light); line-height: 1.6;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div>

    <!-- 2. PASEK KADENCJI (Niebieski) -->
    <div class="term-bar term-bar--nauka">
        <h2 class="term-bar__title">2027/28</h2>
        <a href="#" class="term-bar__nav" aria-label="Poprzednia kadencja">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
    </div>

    <!-- 3. ZDJĘCIE GRUPOWE -->
    <div class="project-group-photo" style="margin-bottom: 4rem;">
        <div class="placeholder placeholder--image" style="background-color: #a5d6a7; height: 350px; border-radius: var(--radius-md);">Grupowe zdjęcie projektu</div>
    </div>

    <!-- 4. DWIE KOLUMNY (Historia i Osiągnięcia) -->
    <div class="project-columns">
        <div class="project-col">
            <div class="dark-pill">HISTORIA PROJEKTU:</div>
            <p style="color: var(--color-text-light); line-height: 1.6;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="project-col">
            <div class="dark-pill">OSIĄGNIĘCIA:</div>
            <p style="color: var(--color-text-light); line-height: 1.6; margin-bottom: 0.5rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry:</p>
            <ul style="color: var(--color-text-light); line-height: 1.6; padding-left: 1.5rem;">
                <li>Industry's standard dummy text ever since 1500s.</li>
                <li>When an unknown printer took a galley.</li>
                <li>Scrambled it to make a type specimen book.</li>
            </ul>
        </div>
    </div>

    <!-- 5. KOORDYNATOR PROJEKTU (Pozioma karta) -->
    <div class="project-coordinator">
        <div class="project-coordinator__photo">
            <div class="placeholder placeholder--person" style="width: 250px; height: 320px; background: #e6e6e6;">Zdjęcie Koordynatora</div>
        </div>
        <div class="project-coordinator__card">
            <h3 style="color: #2ec24f; font-family: var(--font-heading); font-size: 1.8rem; text-transform: uppercase; font-weight: 800; margin-bottom: 0.2rem;">KOORDYNATOR/KA PROJEKTU</h3>
            <h4 style="font-size: 1.2rem; color: var(--color-text); margin-bottom: 0.2rem; text-align: right;">Imię Nazwisko</h4>
            <a href="mailto:adres@knro.pl" class="board-member__email" style="display: block; text-align: right; margin-bottom: 1.5rem;">adres@knro.pl</a>
            
            <p style="color: var(--color-text-light); font-size: 0.9rem; line-height: 1.6; text-align: right;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </div>

</main>

<!-- 6. GALERIA ZDJĘĆ Z KARUZELĄ I STRZAŁKAMI -->
<section class="news-section project-gallery-section" style="background-color: var(--color-dark-bg); padding: 5rem 0; overflow: hidden;">
    <div class="holder">
        <h2 class="section-heading section-heading--light" style="text-align: center; margin-bottom: 3rem;">AKTUALNOŚCI PROJEKTU</h2>
        
        <!-- Nowy kontener karuzeli ze strzałkami -->
        <div class="carousel-wrapper">
            
            <!-- Lewa strzałka podpięta pod identyfikator karuzeli -->
            <button class="carousel-arrow carousel-arrow--prev" aria-label="Poprzednie" onclick="przewinKaruzele('galeria-badania', -1)">&#8249;</button>
            
            <!-- Prawa strzałka podpięta pod identyfikator karuzeli -->
            <button class="carousel-arrow carousel-arrow--next" aria-label="Następne" onclick="przewinKaruzele('galeria-badania', 1)">&#8250;</button>

            <!-- Kontener kafelków z identyfikatorem id="galeria-badania" -->
            <div class="news-carousel" id="galeria-badania" role="list">
                <?php 
                $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'badania', // <--- Pamiętaj o właściwym slugu dla innych projektów
                    'posts_per_page' => 12 
                );
                $gallery_query = new WP_Query($args);

                if ( $gallery_query->have_posts() ) : 
                    while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); 
                ?>
                    
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
                    wp_reset_postdata(); 
                else : 
                ?>
                    <p style="grid-column: 1 / -1; padding: 20px; color: #ffffff; text-align: center;">
                        Brak relacji do wyświetlenia z tego projektu.
                    </p>
                <?php endif; ?>

            </div><!-- /.news-carousel -->
        </div><!-- /.carousel-wrapper --> 
    </div>
</section>

<?php get_footer(); ?>