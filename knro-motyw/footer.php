  <!-- ============================================================
       FOOTER
       ============================================================ -->
  <footer class="site-footer" role="contentinfo">
    <div class="container footer-container">

     

      <!-- Dane kontaktowe -->
      <div class="footer-contact">
        <h3 class="footer-heading">Kontakt</h3>
        <address>
          <a href="mailto:knro@knro.edu.student.pl" class="footer-link">knro@knro.edu.student.pl</a>
        </address>
      </div>

      <!-- Media społecznościowe -->
      <div class="footer-social">
        <h3 class="footer-heading">Śledź nas</h3>
        <div class="social-links">
          <a href="#" class="social-link" aria-label="KNRO na Facebooku" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="#" class="social-link" aria-label="KNRO na Instagramie" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Skrypt do hamburger menu (vanilla JS, bez frameworków) -->
  <script>
    const hamburger = document.querySelector('.nav-hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (hamburger && navLinks) {
      hamburger.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('nav-links--open');
        hamburger.setAttribute('aria-expanded', String(isOpen));
      });
    }
  </script>
 <?php wp_footer(); ?>
</body>
</html>