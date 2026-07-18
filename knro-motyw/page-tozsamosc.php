<?php
/*
Template Name: Szablon Koordynatorzy
*/
get_header(); 
?>
<div id="main-content-t">
    <p> FILARY </p>
    <div class="grid-arrangement">
        
        <div class="item">
            <div class="tag-filar">
                STUDENCI STUDENTOM 
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/handshake-png.png" alt="Handshake" style="max-width:320px;">
            <div class="text-holder">
                <p>Nasze działania kierujemy nie
                tylko do członków KNRO, ale

                również do innych
                studentów. Zależy nam na
                dawaniu im możliwości 
                rozwoju. </p>
            </div>
        </div>
        
        <div class="item">
            <div class="tag-filar">
                ILE BIERZESZ, TYLE DAJESZ 
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/filar-2.png" alt="Handshake" style="max-width:320px;">
            <div class="text-holder"> <p>
            Każdy członek Koła angażuje się we
            współtworzenie środowiska w takim
            samym stopniu w jakim z niego

            korzysta.
            </p></div>
            </div>
        </div>
            

    </div> 
</div>


<?php get_footer(); ?>