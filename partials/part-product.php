<!-- PORTFOLIO PARTIAL -->

<section class="portfolio">
    <div class="container">
        <h2 class="subtitulo">Portfólio</h2>
        <div class="portfolio_lista">
            <div class="grid-8"><img src="<?php echo get_template_directory_uri() ?>/img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
            <div class="grid-8"><img src="<?php echo get_template_directory_uri() ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
            <div class="grid-16"><img src="<?php echo get_template_directory_uri() ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
        </div>
        <?php if ( !is_page('Portfolio') ) { ?>
        <div class="call">
            <p>conheça mais o nosso portfólio</p>
            <a href="/portfolio" class="btn">Portfólio</a>
        </div>
        <?php } ?>
    </div>
</section>