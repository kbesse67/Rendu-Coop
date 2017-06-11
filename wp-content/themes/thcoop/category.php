<?php
/*
Template Name: Category
*/


get_header(); ?>
<div class="headerimg" id="headerimg">
	<img src="wp-content/themes/thcoop/assets/images/bgheadercat.png" alt="">
</div>

<div class="row expanded rowh1">
		<h1 class="wow fadeInLeft" data-wow-delay="0.2s">Actualités</h1>
</div>



<section class="derniersarticles">
<div class="row">
	<div class="large-4 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 columns end">
	<h2 class="wow fadeInLeft" data-wow-delay="0.4s">Derniers articles</h2>
	</div>


</div>
<div class="row">

	<?php
/* SI ON A DES ARTICLES*/
	if(have_posts()):
		while(have_posts()):
			the_post();
			?>
	<article class="large-4 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 columns end wow fadeInUp" data-wow-delay="0.4s">
		<div class="containerimgarticle wow fadeInUp" data-wow-delay="0.6s">

		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();}
		?>

		</div>
		<h4 class="wow fadeInUp" data-wow-delay="0.8s"><?php the_title(); ?></h4>
		<p class="wow fadeInUp" data-wow-delay="1s">
				<?php the_excerpt(); ?>
		</p>
		<a href="<?php the_permalink(); ?>" class="mylittlebutton wow fadeInUp" data-wow-delay="0.9s">Lire l'article</a>
	</article>

	<?php
		endwhile;
		endif;
		?>
	</div>

<div class=" row pnavigation2">
<h2>
	<div class="nav-previous left"><?php previous_posts_link('<span class="meta-nav">-</span> Articles précedents') ?></div> <!-- Créer une pagination -->
	<div class="nav-next right"><?php next_posts_link('Articles suivants') ?></div>
</h2>
</div>

</section>



<?php get_footer();
