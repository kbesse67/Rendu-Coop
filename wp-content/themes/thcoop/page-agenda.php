<?php
/*
Template Name: agenda
*/


get_header(); ?>
<div class="headerimg" id="headerimg">
	<img src="wp-content/themes/thcoop/assets/images/bgheadercat.png" alt="">
</div>

<div class="row expanded rowh1">
		<h1 class="wow fadeInLeft" data-wow-delay="0.4s"><?php the_title() ?></h1>
</div>



<section class="homeagenda">


	</div>

	<div class="row rowarticleagenda wow fadeInUp" data-wow-delay="0.4s">
			<?php
			$args = array(
			'post_type'=> 'films',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC'
			);
			$wp_query = new WP_Query( $args );
			while ( $wp_query->have_posts() ) :
			$wp_query->the_post(); ?>

		<article class="large-4 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 columns end ">
			<h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php the_title(); ?></h2>
			<h4 class="wow fadeInUp" data-wow-delay="0.6s"><?php the_field('soustitre'); ?></h4>
			<p class="wow fadeInUp" data-wow-delay="0.8s">
				 <?php the_excerpt(); ?>
			</p>
		</article>
		<?php endwhile;
		wp_reset_query();
					?>
	</div>

</section>

<form class="row theformulaire">
	<div class="large-4 medium-12 small-12 columns">
		<h2 class="wow fadeInUp" data-wow-delay="0.4s">Vous souhaitez nous proposer un projet ?</h2>
		<p class="wow fadeInUp" data-wow-delay="0.6s">Vous êtes un investisseur, un artisan, un designer, graphiste, un artiste ? Ou vous disposez d'un projet innovant ?
		Contactez-nous <br>
	La coop dispose encore de places libres pour vos projets</p>
	</div>
	<div class="large-4 medium-6 small-12 columns">

		<label for="name" class="wow fadeInUp" data-wow-delay="0.4s">Nom*</label>
		<input type="text" name="name" id="name" placeholder="Nom" value="" class="wow fadeInUp" data-wow-delay="0.4s"/>
		<label for="forname" class="wow fadeInUp" data-wow-delay="0.6s">Prénom*</label>
		<input type="text" class="wow fadeInUp" data-wow-delay="0.6s" name="forname" id="forname" placeholder="Prénom" value="" />
		<label for="vousetes" class="wow fadeInUp" data-wow-delay="0.8s">Vous êtes</label>
		<select name="vousetes" class="wow fadeInUp" data-wow-delay="0.8s" id="vousetes">
            <option value="1">Un artisan</option>
            <option value="2">Un entrepreneur </option>
            <option value="3">Un curieux</option>
    </select>
	</div>
	<div class="large-4 medium-6 small-12 columns">
		<label for="mail" class="wow fadeInUp" data-wow-delay="0.4s">E-mail*</label>
		<input type="text" class="wow fadeInUp" data-wow-delay="0.4s" name="mail" id="mail" placeholder="E-mail" value="" />
		<label for="forname" class="wow fadeInUp" data-wow-delay="0.6s">Téléphone</label>
		<input type="text" class="wow fadeInUp" data-wow-delay="0.6s"name="telephone" id="telephone" placeholder="Télephone" value="" />
		<label for="vousetes" class="wow fadeInUp" data-wow-delay="0.8s">Votre ville</label>
		<input type="text" class="wow fadeInUp" data-wow-delay="0.8s" name="ville" id="ville" placeholder="Votre ville" value="" />
	</div>
	<div class="row">
		<div class="large-4 large-offset-4 columns end">
				<input type="submit" name="" value="Envoyer" class="mylittlebutton submit text-center wow fadeInUp" data-wow-delay="0.4s">
		</div>

	</div>
</form>


<?php get_footer();
