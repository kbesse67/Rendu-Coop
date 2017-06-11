<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="row expanded mapgoogle">
<iframe class="themap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.878539238785!2d7.787289615664319!3d48.57387507926071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c92714ce0199%3A0x6c9ef56f2525d737!2sRue+de+la+Coop%C3%A9rative%2C+67000+Strasbourg!5e0!3m2!1sfr!2sfr!4v1497126306267" width="1980" height="550" frameborder="0" style="border:0   " allowfullscreen></iframe>
</div>

<div class="coordonnees">
	<h2 class="text-center">Nos coordonnées</h2>
	<h4 class="text-center">Bureau de la Coop</h4>
	<h4 class="text-center">3, Place Broglie</h4>
	<h4 class="text-center">6700 Strasbourg</h4>
</div>



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
