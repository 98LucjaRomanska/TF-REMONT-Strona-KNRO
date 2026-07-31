<?php
/*
Template Name: Szablon Zarząd
*/
get_header(); 
?>

<main id="main-content" class="container" style="padding-top: 2rem; padding-bottom: 6rem;">
    
    <!-- Opcjonalny tekst wprowadzający -->
    <div class="page-content" style="margin-bottom: 2rem; color: var(--color-text-light); line-height: 1.6;">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_content(); 
            endwhile; 
        endif; 
        ?>
    </div>

    <!-- Pasek Kadencji z ciemnym tłem -->
    <div class="term-bar">
        <h2 class="term-bar__title">2027/28</h2>
        <a href="#" class="term-bar__nav" aria-label="Poprzednia kadencja">
            <!-- Ikona strzałki -->
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
    </div>

    <!-- Siatka Członków Zarządu -->
    <div class="board-grid">
        
        <!-- Osoba 1 -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Prezes</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Osoba 2 -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Wice prezes ds. HR</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Osoba 3 -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Wice prezes ds. marketingu</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

        <!-- Osoba 4 -->
        <div class="board-member">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:320px; background-color: #e6e6e6;">Zdjęcie</div>
            </div>
            <div class="board-member__info">
                <div class="board-member__role">Wice prezes ds. PR</div>
                <div class="board-member__name">Imię Nazwisko</div>
                <a href="mailto:adres@knro.pl" class="board-member__email">adres@knro.pl</a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>