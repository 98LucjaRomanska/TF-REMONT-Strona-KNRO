<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KNRO – Koło Naukowe Rozwoju Osobistego</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body>

  <!-- ============================================================
       HEADER / NAV
       ============================================================ -->
  <header class="site-header">
    <nav class="main-nav" aria-label="Nawigacja główna">
      <div class="nav-logo" aria-label="Logo KNRO">
        <a href="<?php echo home_url(); ?>">
          <div class="placeholder placeholder--logo" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-knro.png" alt="Logo KNRO">
          </div>
        </a>    
      </div>
            
      </div>
      <ul class="nav-links" role="list">
        <li><a href="<?php echo home_url(); ?>" class="nav-link nav-link--active">Strona Główna</a></li>
        <li><a href="#aktualnosci" class="nav-link">Aktualności</a></li>
        <li class="nav-link--has-dropdown">
          <a href="#" class="nav-link">O nas ▾</a>
          
          <!-- To jest rozwijane podmenu -->
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('/tozsamosc'); ?>" class="dropdown-link">Tożsamość</a></li>
            <li><a href="<?php echo site_url('/zarzad'); ?>" class="dropdown-link">Zarząd</a></li>
            <li><a href="<?php echo site_url('/koordynatorzy'); ?>" class="dropdown-link">Koordynatorzy</a></li>
            <li><a href="<?php echo site_url('/opiekunowie'); ?>" class="dropdown-link">Opiekunowie Naukowi</a></li>
            <li><a href="<?php echo site_url('/historia'); ?>" class="dropdown-link">Historia</a></li>
          </ul>
        </li>
        <li><a href="#rekrutacja" class="nav-link">Rekrutacja</a></li>
        <li class="nav-link--has-dropdown">
          <a href="#" class="nav-link">Projekty ▾</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('/trenerzy'); ?>" class="dropdown-link">Trenerzy</a></li>
            <li><a href="<?php echo site_url('/badania'); ?>" class="dropdown-link">Badania</a></li>
            <li><a href="<?php echo site_url('/swd'); ?>" class="dropdown-link">S(w)D</a></li>
            <li><a href="<?php echo site_url('/bw'); ?>" class="dropdown-link">BW</a></li>
            <li><a href="<?php echo site_url('/gps'); ?>" class="dropdown-link">GPS</a></li>
            <li><a href="<?php echo site_url('/cc'); ?>" class="dropdown-link">CC</a></li>
            <li><a href="<?php echo site_url('/hs'); ?>" class="dropdown-link">HS</a></li>
            <li><a href="<?php echo site_url('/od'); ?>" class="dropdown-link">OD</a></li>
          </ul>
        </li>

        <li class="nav-link--has-dropdown">
          <a href="#" class="nav-link">Kontakt ▾</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('/wspolpraca'); ?>" class="dropdown-link">Współpraca</a></li>
            <li><a href="<?php echo site_url('/nasi-partnerzy'); ?>" class="dropdown-link">Nasi Partnerzy</a></li>
            <li><a href="<?php echo site_url('/badania-naukowe'); ?>" class="dropdown-link">Badania Naukowe</a></li>
          </ul>
        </li>
      </ul>
      <div class="nav-search" aria-label="Wyszukiwarka">
        <button class="btn-search" aria-label="Otwórz wyszukiwarkę">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </button>
      </div>
      <!-- Hamburger dla mobile -->
      <button class="nav-hamburger" aria-label="Otwórz menu" aria-expanded="false" aria-controls="nav-links">
        <span></span><span></span><span></span>
      </button>
    </nav>

    <!-- Pasek kategorii: NAUKA / BIZNES / EDUKACJA -->
    <!-- Pasek kategorii: NAUKA / BIZNES / EDUKACJA (tylko na głównej stronie) -->
    <?php if ( is_front_page() ) : ?>
      <div class="category-bar" role="navigation" aria-label="Kategorie">
        <a href="#" class="category-bar__item category-bar__item--nauka">Nauka</a>
        <a href="#" class="category-bar__item category-bar__item--biznes">Biznes</a>
        <a href="#" class="category-bar__item category-bar__item--edukacja">Edukacja</a>
      </div>
    <?php endif; ?>

    <!-- Tagline / pasek tytułowy (widoczny wszędzie, tekst zmienia się dynamicznie) -->
    <div class="tagline-bar">
      <span class="tagline-bar__text">
        <?php 
          if ( is_front_page() ) {
              // Tekst widoczny tylko na stronie głównej
              echo 'Społeczna Przydatność';
          } else {
              // Na podstronach wyświetla tytuł wpisany w panelu WordPressa
              echo get_the_title(); 
          }
        ?>
      </span>
    </div>
  </header>