<?php
/*
Template Name: Infrastructure
*/

get_header(); ?>

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


<div class="row theformulaire">
	<div class="large-4 medium-12 small-12 columns">
		<h2>Vous souhaitez nous proposer un projet ?</h2>
		<p>Vous êtes un investisseur, un artisan, un designer, graphiste, un artiste ? Ou vous disposez d'un projet innovant ?
		Contactez-nous <br>
	La coop dispose encore de places libres pour vos projets</p>
	</div>
	<div class="large-4 medium-6 small-12 columns">
		<label for="name">Nom*</label>
		<input type="text" name="name" id="name" placeholder="Nom" value="" />
		<label for="forname">Prénom*</label>
		<input type="text" name="forname" id="forname" placeholder="Prénom" value="" />
		<label for="vousetes">Vous êtes</label>
		<select name="vousetes" id="vousetes">
            <option value="1">Un artisan</option>
            <option value="2">Un entrepreneur </option>
            <option value="3">Un curieux</option>
    </select>
	</div>
	<div class="large-4 medium-6 small-12 columns">
		<label for="mail">E-mail*</label>
		<input type="text" name="mail" id="mail" placeholder="E-mail" value="" />
		<label for="forname">Téléphone</label>
		<input type="text" name="telephone" id="telephone" placeholder="Télephone" value="" />
		<label for="vousetes">Votre ville</label>
		<input type="text" name="ville" id="ville" placeholder="Votre ville" value="" />
	</div>
	<div class="row">
		<div class="large-4 large-offset-4 columns end">
				<input type="submit" name="" value="Envoyer" class="mylittlebutton submit text-center">
		</div>

	</div>
</div>

<?php get_footer();
