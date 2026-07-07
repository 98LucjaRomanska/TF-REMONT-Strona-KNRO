<?php get_header(); ?>

  <main id="main-content">

    <!-- ============================================================
         SEKCJA HERO – logo KNRO + ikony projektów
         ============================================================ -->
    <section class="hero" aria-labelledby="hero-logo">
      <div class="hero__logo">
        <!-- W WordPress: wp_get_attachment_image() lub ACF -->
        <div class="placeholder placeholder--hero-logo" aria-label="Logo KNRO – Koło Naukowe Rozwoju Osobistego">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo_knro_napis.png" alt="Logo KNRO">
          <div class="hero__logo-text">
            <!--<span class="hero__logo-title">KNRO</span>
            <span class="hero__logo-subtitle">Koło Naukowe Rozwoju Osobistego</span>-->
          </div>
        </div>
      </div>

      <!-- Ikony projektów działających w ramach KNRO -->
      <!-- W WordPress: wp_nav_menu() lub Custom Post Type "Projekty" -->
      <nav class="projects-icons" aria-label="Projekty KNRO">
        <ul class="projects-icons__list" role="list">
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt SwD – Sztukowicze w Drodze">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-swd.png" alt="Logo SwD">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt BW – Book Worms">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-bw.png" alt="Logo BW">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt T – logo projektu T">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-trenerzy.png" alt="Logo Trenerzy">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt B – logo projektu B">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-badania.png" alt="Logo Badania">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt HSI – logo projektu HSI">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-HSI.png" alt="Logo HSI">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt CC – logo projektu CC">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-case-club.png" alt="Logo Case Club">
              </div>
            </a>
          </li>
          <li class="projects-icons__item">
            <a href="#" class="projects-icons__link" aria-label="Projekt GPS – Gdzieś Przez Świat">
              <div class="placeholder placeholder--icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-GPS.png" alt="Logo GPS">
              </div>
            </a>
          </li>
        </ul>
      </nav>
    </section>

    <!-- ============================================================
         SEKCJA O NAS
         ============================================================ -->
    <section class="about" id="o-nas" aria-labelledby="about-heading">
      <div class="container">
        <h2 class="section-heading" id="about-heading">O nas</h2>
        <div class="about__grid">
          <div class="about__text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
          <div class="about__media">
            <!-- W WordPress: get_field('about_image') lub featured media -->
            <div class="placeholder placeholder--image" aria-label="Zdjęcie ilustracyjne – krajobraz / aktywność">Zdjęcie ilustracyjne</div>
            <div class="placeholder placeholder--person" aria-label="Zdjęcie osoby reprezentującej KNRO">Zdjęcie osoby</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         SEKCJA AKTUALNOŚCI + SIDEBAR NOWOŚCI
         W WordPress: tu wchodzi The Loop (WP_Query)
         ============================================================ -->
    <section class="news-section" id="aktualnosci" aria-labelledby="news-heading">
      <div class="holder">
        <div class="news-section__layout">

          <!-- Główna kolumna z kafelkami aktualności -->
          <div class="news-main">
            <h2 class="section-heading section-heading--light" id="news-heading">Aktualności</h2>

            <!-- Karuzela / grid kafelków
                W WordPress: while ( $query->have_posts() ) : $query->the_post(); 
                Każdy <article class="news-item"> to jeden post z Pętli. -->
            <div class="news-grid" role="list">
                <?php 
                // 1. Definiujemy zapytanie: pobierz 3 najnowsze wpisy z bloga
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $news_query = new WP_Query($args);

                // 2. Sprawdzamy, czy są jakiekolwiek wpisy
                if ( $news_query->have_posts() ) : 
                    // 3. Pętla: generuj poniższy kod dla każdego wpisu
                    while ( $news_query->have_posts() ) : $news_query->the_post(); 
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
                    // 4. Sprzątamy po zapytaniu
                    wp_reset_postdata(); 
                else : 
                ?>
                    <p style="grid-column: 1 / -1; padding: 20px;">Brak aktualności do wyświetlenia. Dodaj pierwszy wpis w panelu WP!</p>
                <?php endif; ?>

            </div><!-- /.news-grid -->

            <!-- Przycisk nawigacji karuzeli / paginacja -->
            <div class="news-nav" aria-label="Paginacja aktualności">
              <button class="btn-nav btn-nav--next" aria-label="Następne aktualności">&#8250;</button>
            </div>
          </div><!-- /.news-main -->

          <!-- Sidebar: NOWOŚCI! -->
          <!-- W WordPress: get_sidebar() lub dynamic_sidebar('news-widget') -->
          <aside class="news-sidebar" aria-labelledby="sidebar-heading">
            <h3 class="sidebar-heading" id="sidebar-heading">Nowości!</h3>
            <!-- W WordPress: WP_Widget lub shortcode listy postów -->
            <div class="sidebar-preview">
              <div class="placeholder placeholder--sidebar-img" aria-hidden="true">Podgląd artykułu</div>
            </div>
            <ul class="sidebar-list" role="list">
              <li class="sidebar-list__item"><a href="#">Kapsułki na porost włosów</a></li>
              <li class="sidebar-list__item"><a href="#">Nowe rzeczy</a></li>
              <li class="sidebar-list__item"><a href="#">I nie tylko</a></li>
              <li class="sidebar-list__item"><a href="#">Zapraszamy na nasz spot reklamowy</a></li>
              <li class="sidebar-list__item"><a href="#">Mateusz NIE Mati!</a></li>
            </ul>
          </aside>

        </div><!-- /.news-section__layout -->
      </div> 
    </section>

    <!-- ============================================================
         SEKCJA PARTNERZY
         W WordPress: Custom Post Type "Partnerzy" lub ACF Repeater
         ============================================================ -->
    <section class="partners" id="partnerzy" aria-labelledby="partners-heading">
      <div class="partner-container">
        <h2 class="section-heading" id="partners-heading">Partnerzy</h2>
        <div class="partners__grid" role="list">

          <a href="#" class="partner-item" role="listitem" aria-label="Stowarzyszenie Rozwoju Osobistego SEED">
            <div class="placeholder placeholder--partner" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-SEED.png" alt="Logo SEED">
            </div>
          </a>

          <a href="#" class="partner-item" role="listitem" aria-label="RKN B – partner KNRO">
            <div class="placeholder placeholder--partner" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-RKN.png" alt="Logo RKN">
            </div>
          </a>

          <a href="#" class="partner-item" role="listitem" aria-label="Katedra Zarządzania Zasobami Pracy UEK">
            <div class="placeholder placeholder--partner" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-ZZP.png" alt="Logo ZZP">
            </div>
          </a>

          <a href="#" class="partner-item" role="listitem" aria-label="Uniwersytet Ekonomiczny w Krakowie">
            <div class="placeholder placeholder--partner" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-UEK.png" alt="Logo UEK">
            </div>
          </a>

          <a href="#" class="partner-item" role="listitem" aria-label="Kraków.pl – portal miasta Krakowa">
            <div class="placeholder placeholder--partner" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-krakow.png" alt="Logo Kraków">
            </div>
          </a>

          <a href="#" class="partner-item" role="listitem" aria-label="Forge – partner technologiczny">
            <div class="placeholder placeholder--partner" aria-hidden="true">Logo: Forge</div>
          </a>

        </div>
      </div>
    </section>

    <!-- ============================================================
         SEKCJA KONTAKT – formularz
         W WordPress: zamień <form> na [contact-form-7 id="..." title="Kontakt"]
         lub inny shortcode wtyczki formularzy.
         ============================================================ -->
    <section class="contact-form-section" id="kontakt" aria-labelledby="contact-form-heading">
      <div class="container container--narrow">
        <h2 class="section-heading" id="contact-form-heading">Skontaktuj się z nami</h2>
        <p class="contact-form-section__lead">Jesteś zainteresowany/a współpracą? Wypełnij formularz, a my się odezwiemy!</p>

        <!-- ===== FORMULARZ KONTAKTOWY =====
             W WordPress podmień cały <form>…</form> na shortcode CF7:
             [contact-form-7 id="TWOJE_ID" title="Kontakt"]
        ===== -->
        <form class="contact-form" method="post" action="#" novalidate>
          <div class="form-group">
            <label class="form-label" for="contact-name">Imię i Nazwisko <span aria-hidden="true">*</span></label>
            <input class="form-input" type="text" id="contact-name" name="your-name" placeholder="Jan Kowalski" required autocomplete="name" />
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-email">E-mail <span aria-hidden="true">*</span></label>
            <input class="form-input" type="email" id="contact-email" name="your-email" placeholder="jan.kowalski@gmail.com" required autocomplete="email" />
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-subject">Temat zapytania</label>
            <input class="form-input" type="text" id="contact-subject" name="your-subject" placeholder="Temat" />
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-message">Wiadomość <span aria-hidden="true">*</span></label>
            <textarea class="form-input form-textarea" id="contact-message" name="your-message" placeholder="Opisz w kilku słowach z czym się do nas zwracasz..." rows="5" required></textarea>
          </div>

          <div class="form-group form-group--submit">
            <button class="btn btn--primary" type="submit">Wyślij wiadomość</button>
          </div>
        </form>
        <!-- ===== KONIEC FORMULARZA ===== -->

      </div>
    </section>

  </main>

<?php get_footer(); ?>