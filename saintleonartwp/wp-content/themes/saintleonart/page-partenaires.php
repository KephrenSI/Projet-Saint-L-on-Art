<?php 
/*
    Template Name: PAGE-PARTENAIRES
*/
get_header(); ?>
	<section class="title">
		<h2  class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="partenaires">
		<h2  class="partenaires__heading2 heading2 hidden" aria-level="2" role="heading">Bloc</h2>
		<section class="remerciement">
			<h3 class="remerciement__heading3 heading3" aria-level="3" role="heading">Ils nous on fait confiance</h3>
			<div class="remerciement__content">
				<div class="remerciement__content--txt">
					<?php the_field('remerciements'); ?>
				</div>
			</div>
			<div class="remerciement__cta cta">
                <span class="cta__masque">Tous le programme</span>
                <a href="<?php the_permalink(103); ?>" title="Aller vers la page à propos" class="cta__button">Tous le programme</a>
            </div>
		</section>
		<section class="all-partenaire">
			<h3  class="all-partenaire__heading3 heading3 hidden" aria-level="3" role="heading">All</h3>
			<div class="all-partenaire">
				<div class="all-partenaire__bloc">
					<?php
	                $args = array( 'post_type' => 'partners', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args );
	                ?>
	                <?php if ( $the_query->have_posts() ) : ?>
	                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	                <?php $fields = get_field('logo'); ?>
	                    <a href="<?php the_field('url'); ?>" title="Aller vers le site du partenaire <?php the_title(); ?>" class="all-partenaire__bloc--link"><img src="<?php echo $fields['url']; ?>" alt="logo du partenaire <?php the_title(); ?>" width="100"></a>
	                <?php endwhile; endif; ?>
				</div>
			</div>
		</section>
	</section>
<?php get_footer(); ?>