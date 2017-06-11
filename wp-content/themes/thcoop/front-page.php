<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


	<section class="homecoopheader">
		<div class="row">
			<div class="large-8 small-10 small-offset-1 columns ">
				<h2>
					<img src="wp-content/themes/thcoop/assets/images/bigcoop.png" alt="La Coop" id="homelogocoop"/>
				</h2>
				<h2>Découvrez les différentes infrastuctures
	seront présentes dans la zone Coop</h2>


				<a href="#" class="mybutton">Je découvre</a>
			</div>
			<div class="large-4 columns"></div>
		</div>
	</section>



<section class="homeprojet">
<div class="row">
	<div class="large-4 medium-6 small-12 columns colonnegauche">

		<h2 class=" wow slideInLeft">
			Projet initié par
			la ville de Strasbourg
			Prévu pour 2018
		</h2>
		<p>
			Mots par Yves Burr <br>
			Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
		</p>
	</div>
	<div class="large-4 medium-6 small-12 columns colonnecenter">
		<img src="wp-content/themes/thcoop/assets/images/icons/cafemusical.png" alt="Café musicale" class="icons"  />
		<h3>Café Musicale</h3>
		<p>Lorem Ipsum est simplement du faux texte employé dans la composition</p>
		<img src="wp-content/themes/thcoop/assets/images/icons/city-hall.png" alt="Endroit pour vous" class="icons" />
		<h3>Un endroit pour vous</h3>
		<p>Lorem Ipsum est simplement du faux texte employé dans la composition</p>
		<img src="wp-content/themes/thcoop/assets/images/icons/praying.png" alt="Café musicale" class="icons" />
		<h3>Mains dans la main</h3>
		<p>Lorem Ipsum est simplement du faux texte employé dans la composition</p>
	</div>
	<div class="large-4 medium-12 small-12 columns colonnedroite">
			<img src="wp-content/themes/thcoop/assets/images/bandemagnetique.png" alt=""  class="bandeimage" />
	</div>
</div>

<div class="row">
	<div class="large-12 medium-8 small-centered columns">
			<a href="<?php the_permalink(); ?>" class="mybutton text-center">Je découvre</a>
	</div>

</div>
</section>






<section class="homeagenda">
	<div class="row rowagenda">
		<div class="large-3 medium-5 small-12 columns">
				<h2>Agenda de la Coop prévu pour 2019</h2>
		</div>
		<div class="large-9 medium-7 small-12 columns">
				<a href="<?php the_permalink(); ?>" class="mybuttonblack">Voir l'agenda complet</a>
		</div>
	</div>

	<div class="row rowarticleagenda">
			<?php
			$args = array(
			'post_type'=> 'films',
			'posts_per_page' => 4,
			'orderby' => 'date',
			'order' => 'DESC'
			);
			$wp_query = new WP_Query( $args );
			while ( $wp_query->have_posts() ) :
			$wp_query->the_post(); ?>

		<article class="large-4 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 columns end ">
			<h2><?php the_title(); ?></h2>
			<h4><?php the_field('soustitre'); ?></h4>
			<p>
				 <?php the_excerpt(); ?>
			</p>
		</article>
		<?php endwhile;
		wp_reset_query();
					?>
	</div>

</section>


<section class="homemenuiserie">
	<div class="row expanded">
		<div class="large-4 medium-12 small-12 columns menuiserie sectionmenuiserie">
			<h2>Menuiserie</h2>
			<h3>Menuiserie</h3>
			<p>m est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un peintre an</p>
			<a href="<?php the_permalink(); ?>" class="mylittlebutton">Je découvre</a>
		</div>
		<div class="large-4 medium-12 small-12 columns garagenord sectionmenuiserie">
			<h2>Garage Nord</h2>
			<h3>Garage Nord</h3>
			<p>m est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un peintre an</p>
			<a href="<?php the_permalink(); ?>" class="mylittlebutton">Je découvre</a>
		</div>
		<div class="large-4 medium-12 small-12 columns garagesud sectionmenuiserie">
			<h2>Garage Sud</h2>
			<h3>Garage Sud</h3>
			<p>m est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un peintre an</p>
			<a href="<?php the_permalink(); ?>" class="mylittlebutton">Je découvre</a>
		</div>
	</div>
</section>



<section class="homearticle">

	<div class="row rowactualite">

		<div class="large-2 medium-4 small-12 columns">
				<h2>Actualités</h2>
		</div>
		<div class="large-10 medium-8 small-12 columns">
				<a href="<?php the_permalink(); ?>" class="mybutton">Voir les actualités</a>
		</div>
	</div>



	<div class="row rowarticle">
		<?php
	/* SI ON A DES ARTICLES*/
		if(have_posts()):
			while(have_posts()):
				the_post();
				?>
		<article class="large-4 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 columns end ">
			<div class="containerimgarticle">

			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();}
			?>

			</div>
			<h4><?php the_title(); ?></h4>
			<p>
					<?php the_excerpt(); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="mylittlebutton">Je découvre</a>
		</article>

		<?php
			endwhile;
			endif;
			?>
		</div>

</section>




<?php get_footer();
