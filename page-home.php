<?php
	// Template Name: Home template
?>

<!-- wp header -->
<?php get_header() ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="introducao">
			<div class="container">
				<h1><?php the_field('home_title') ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field('home_quote') ?></p>
					<cite><?php the_field('home_quote_author') ?></cite>
				</blockquote>
				<a href="/products" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri() ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri() ?>/img/produtos/esporte.png" alt="Bikcraft Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri() ?>/img/produtos/retro.png" alt="Bikcraft Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>

			</ul>

			<div class="call">
				<p>clique aqui e veja os detalhes dos produtos</p>
				<a href="produtos.html" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<?php include(TEMPLATEPATH . '/partials/part-product.php') ?>

		<?php include(TEMPLATEPATH . '/partials/part-about.php') ?>

		<div class="quebra">
			<blockquote class="quote-externo container">
				<p><?php the_field('home_end_quote') ?></p>
				<cite><?php the_field('home_end_quote_author') ?></cite>
			</blockquote>
		</div>
	<?php endwhile; endif ?>

<!-- wp footer -->
<?php get_footer(); ?>