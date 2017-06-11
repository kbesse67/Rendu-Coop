<?php
/*
Template Name: FABLAB
*/


get_header(); ?>
<div class="headerimg" id="headerimg">
	<img src="wp-content/themes/thcoop/assets/images/bgheadercat.png" alt="">
</div>

<div class="row expanded rowh1">
		<h1><?php the_title() ?></h1>
</div>


<section class="fablab">
<div class="row">
	<div class="large-4 medium-6 small-12 columns colonnegauche">

		<h2>
Découverte du FABLAB
		</h2>
		<p>
			Mots par Yves Burr <br>
			Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
		</p>
	</div>
	<div class="large-4 medium-6 small-12 columns colonnecenter">
		<img src="wp-content/themes/thcoop/assets/images/icons/cafemusical_white.png" alt="Café musicale" class="icons"  />
		<h3>Café Musicale</h3>
		<p>Lorem Ipsum est simplement du faux texte employé dans la composition</p>
		<img src="wp-content/themes/thcoop/assets/images/icons/city-hall_white.png" alt="Endroit pour vous" class="icons" />
		<h3>Un endroit pour vous</h3>
		<p>Lorem Ipsum est simplement du faux texte employé dans la composition</p>
		<img src="wp-content/themes/thcoop/assets/images/icons/praying_white.png" alt="Café musicale" class="icons" />
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





<?php get_footer();
