<?php
/*
Template Name: Szablon Koordynatorzy
*/
get_header(); 
?>

<main id="main-content" class="container" style="padding-top: 4rem; padding-bottom: 8rem;">
    
    <!-- Opcjonalny tekst wprowadzający -->
    <div class="page-content" style="margin-bottom: 4rem; color: var(--color-text-light); line-height: 1.6; text-align: center;">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_content(); 
            endwhile; 
        endif; 
        ?>
    </div>

    <!-- Siatka Koordynatorów (wykorzystuje style z Zarządu) -->
    <div class="board-grid">
        
        <!-- Koordynator Trenerzy -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Koordynator projektu:<br>Trenerzy</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Koordynator Badania -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Koordynator projektu:<br>Badania</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Koordynator Businesswomen -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Koordynator projektu:<br>Businesswomen (BW)</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Koordynator S(w)D -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Koordynator projektu:<br>S(w)D</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Możesz powielać ten blok dla pozostałych projektów: GPS, CC, HS, OD -->

    </div>

</main>

<?php get_footer(); ?>