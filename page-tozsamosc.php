<?php
/*
Template Name: Szablon Koordynatorzy
*/
get_header(); 
?>
<div id="main-content-t">
    
    <div class="a-block">
    <span> Misja </span>
    <span> Wizja </span> 
    <span> Filary </span>
    <span> Wartości </span>         
    </div>
    <div class="b-block"> 
        <h1> MISJA </h1>
        <div class="content-block">
            <p> Poprzez odpowiedzialne działanie i efektywną współpracę tworzymy zintegrowane środowisko zdobywania wiedzy i rozwoju    praktycznych umiejętności, otwarte dla każdego studenta. </p>
        </div>
    </div> 
    <div class="b-block"> 
        <h1> WIZJA </h1>
        <div class="content-block">
            <p>
            Otwarta sieć zdobywania wiedzy, umiejętności i doświadczeń.
            </p>
        </div>
    </div>
    <div class="b-block" id="filary"> 
        <h1> FILARY </h1>
        <div class="content-block">
            <p></p>
        </div>
        <div class="grid-arrangement">
            

            <div class="item">
                <div class="tag-filar">
                    Studenci studentom
                </div>
                <img src="<?php echo get_template_directory_uri();?>/images/handshake-png.png" alt="Handshake" style="max-width:320px;">
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
                    Ile bierzesz, tyle dajesz 
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/filar-2.png" alt="Handshake" style="max-width:320px;">
                    <div class="text-holder"> <p>
                    Każdy członek Koła angażuje się we
                    współtworzenie środowiska w takim
                    samym stopniu w jakim z niego
                    korzysta.</p>
                    
                </div>
            </div>  
        </div> 
    </div>
        <div class="b-block"> 
            <h1> WARTOŚCI </h1>
            <div class="content-block">
                <p></p>
            </div>
        </div>
</div>


<?php get_footer(); ?>