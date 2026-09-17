<?php
/*
Template Name: Szablon Opiekunowie
*/
get_header(); 
?>

<main id="main-content" class="container" style="padding-top: 4rem; padding-bottom: 8rem;">
    
    <div class="supervisors-grid">
        
        <div class="board-member board-member--large">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:450px; background-color: #e6e6e6;">Zdjęcie opiekuna</div>
            </div>
            <div class="board-member__info">
                <h3 class="board-member__name" style="font-size: 1.6rem; font-weight: 700; color: var(--color-text); margin-bottom: 0.2rem;">Sylwia Wiśniewska</h3>
                <div class="board-member__role" style="font-size: 1.1rem; color: var(--color-text-light); font-weight: 400;">Opiekun Koła</div>
                
                <a href="mailto:adres@knro.pl" class="board-member__email" style="display: block; margin-top: 0.5rem; font-size: 0.85rem;">adres@knro.pl</a>
            </div>
        </div>

        <div class="board-member board-member--large">
            <div class="board-member__photo">
                <div class="placeholder placeholder--person" style="width:100%; height:450px; background-color: #e6e6e6;">Zdjęcie opiekuna</div>
            </div>
            <div class="board-member__info">
                <h3 class="board-member__name" style="font-size: 1.6rem; font-weight: 700; color: var(--color-text); margin-bottom: 0.2rem;">Robert Szydło</h3>
                <div class="board-member__role" style="font-size: 1.1rem; color: var(--color-text-light); font-weight: 400;">Pomocniczy Opiekun Koła</div>
                
                <a href="mailto:adres@knro.pl" class="board-member__email" style="display: block; margin-top: 0.5rem; font-size: 0.85rem;">adres@knro.pl</a>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>