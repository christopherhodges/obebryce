<article id="post-<?php echo get_the_id();?>">
	<header>
		<h2><?php the_title(); ?></h2>
	</header>
	<section>
		<?php the_content(); ?>
	</section>
	<footer>
		<time><?php the_date(); ?></time>
	</footer>
</article>