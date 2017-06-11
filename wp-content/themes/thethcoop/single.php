<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="headerimg" id="headerimg">
	<img src="wp-content/themes/thcoop/assets/images/bgheadercat.png" alt="">
</div>



<section class="singlearticle">

  <div class="row">
    <div class="containerimgsingle large-12 columns">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();}
    ?>
    </div>
  </div>


  <div class="row">
  	<?php
  /* SI ON A DES ARTICLES*/
  	if(have_posts()):
  		while(have_posts()):
  			the_post();
  			?>
  	<article class="large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 columns ">
  		<h1><?php the_title(); ?></h1>
      <h4><?php the_author(); ?></h4>
  		<p>
  				<?php the_excerpt(); ?>
  		</p>
  	</article>
  	<?php
  		endwhile;
  		endif;
  		?>
  </div>
 <!--
  <div class="row">
  	<?php
  /* SI ON A DES ARTICLES*/
  	if(have_posts()):
  		while(have_posts()):
  			the_post();
  			?>
  	<article class="large-7 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 columns ">
  		<h1><?php the_title(); ?></h1>
      <h4><?php the_author(); ?></h4>
  		<p>
  				<?php the_excerpt(); ?>
  		</p>
  	</article>
  	<?php
  		endwhile;
  		endif;
  		?>

    <aside class="large-4 columns ">
      <?php
    /* SI ON A DES ARTICLES*/
      if(have_posts()):
        while(have_posts()):
          the_post();
          ?>
        <article class="large-12 medium-12 small-12 columns" <?php post_class('main-content') ?> id="post-<?php the_ID(5); ?>" >
          <div class="containerimgarticle">
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail();}
          ?>
          </div>
          <h4><?php the_title(); ?></h4>
      		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="mylittlebutton">Voir l'article</a>
        </article>

        <?php
          endwhile;
          endif;
          ?>
    </aside>

        </div>
-->
</section>


<?php get_footer();
