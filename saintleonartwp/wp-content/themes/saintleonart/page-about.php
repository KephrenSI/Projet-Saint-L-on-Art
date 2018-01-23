<?php 
/*
    Template Name: PAGE-ABOUT
*/
get_header(); ?>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="about">
		<h2  class="about__heading2 heading2 hidden" aria-level="2" role="heading">Infos</h2>
		<section class="presentation">
			<h3  class="presentation__heading3 heading3" aria-level="3" role="heading">Qu'est ce que Saint Léon'Art ?</h3>
			<div class="presentation__content">
				<div class="presentation__content--txt">
					<?php the_field('presentation') ?>
				</div>
			</div>
		</section>
		<section class="historique">
			<h3  class="historique__heading3 heading3" aria-level="3" role="heading">Le quartier & le festival</h3>
			<div class="historique__content">
				<div class="historique__content--txt">
					<?php the_field('context') ?>
				</div>
				<div class="historique__content--bloc">
					<p class="historique__content--txt">Cette initiative a également pour objectif de rendre l'art et la culture accessible à tous, toutes origines et toutes classes sociales confondues, en offrant un accès libre et gratuit à l'évènement. Durant le week-end, une foule d'animations sont prévues pour les visiteurs :</p>
					<ul class="list">
						<li class="list__elt">
							<div class="list__elt--txt">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="organisateur">
			<h3  class="organisateur__heading3 heading3" aria-level="3" role="heading">Organisateurs</h3>
			<div class="organisateur__role">
				<?php if( have_rows('organisateurs') ) : while ( have_rows('organisateurs') ) : the_row(); ?>
				<div class="organisateur__role--bloc">
					<h4  class="organisateur__heading4 heading4" aria-level="4" role="heading"><?php the_sub_field('poste') ?></h4>
					<div class="organisateur__role--perso">
						<ul class="list">
							<li class="list__elt">
								<p class="list__elt--txt"><?php the_sub_field('nom') ?></p>
							</li>
							<?php if(get_sub_field('site_web')) : ?>
							<li class="list__elt">
								<a class="list__elt--link" href="<?php the_sub_field('site_web'); ?>"><?php the_sub_field('site_web') ?></a>
							</li>
							<?php endif; ?>
							<?php if(get_sub_field('mail')) : ?>
							<li class="list__elt">
								<a class="list__elt--link" href="mailto:<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail') ?></a>
							</li>
							<?php endif; ?>
							<?php if(get_sub_field('telephone')) : ?>
							<li class="list__elt">
								<a class="list__elt--link" href="tel:<?php the_sub_field('telephone'); ?>"><?php the_sub_field('telephone') ?></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			<?php endwhile; endif; ?>
			</div>
		</section>
		<section class="presse">
			<h3  class="presse__heading3 heading3" aria-level="3" role="heading">Espace presse</h3>
			<?php if( have_rows('docs') ) : while ( have_rows('docs') ) : the_row(); ?>
			<div class="presse__docs">
				<?php $file = get_sub_field('media'); ?>
				<?php $extention = $file['filename']; ?>
				<?php $url = $file['url']; ?>
				<?php if( $file ): ?>
				<div class="presse__docs--infos">
					<h4  class="presse__heading4 heading4" aria-level="4" role="heading"><?php the_sub_field('nom') ?></h4>
					<time class="presse__docs--date" datetime="<?php echo get_the_date('d/m/Y'); ?>">
	                    Publié le <?php echo get_the_date('j F Y'); ?>
	                </time>

					<div>
						<p class="presse__docs--poids"><?php //echo $filesize ?></p>
						<p class="presse__docs--extention"><?php echo "." . pathinfo($extention, PATHINFO_EXTENSION); ?></p>
					</div>
				</div>
				<div class="presse__docs--download">
					<a href="<?php echo $url; ?>" class="presse__docs--link">Télécharger</a>
				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; endif; ?>
		</section>
		<section class="last-year">
			<h3 class="last-year__heading3 heading3" aria-level="3" role="heading">Que c'est il passé ?</h3>
			<?php if( have_rows('annees') ) : while ( have_rows('annees') ) : the_row(); ?>
			<div class="last-year__years">
				<h4  class="last-year__heading4 heading4" aria-level="4" role="heading"><?php the_sub_field('annee') ?></h4>
				<div class="last-year__years--txt">
					<?php the_sub_field('resume') ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</section>
	</section>
	<section class="stat">
        <h2  class="stat__heading2 heading2" aria-level="2" role="heading">Statistiques</h2>
        <ul class="stat__list">
            <?php
                $args = array( 'post_type' => 'stat', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="stat__list--elt">
                <a class="stat__list--link" href="#<?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="<?php dw_asset('js/active.js'); ?>"></script>
        <ul  class="stat__list2">
            <?php
                $args = array( 'post_type' => 'stat', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="stat__list2--elt" id="<?php the_title(); ?>">
                <ul class="stat__list2--global">
                    <li class="stat__list2--bloc">
                        <p class="stat__list2--logo">XD</p>
                        <p class="stat__list2--number"><?php the_field('artistes'); ?></p>
                        <p class="stat__list2--about">Artistes</p>
                    </li>
                    <li class="stat__list2--bloc">
                        <p class="stat__list2--logo">XD</p>
                        <p class="stat__list2--number"><?php the_field('scenes'); ?></p>
                        <p class="stat__list2--about">Scènes</p>
                    </li>
                    <li class="stat__list2--bloc">
                        <p class="stat__list2--logo">XD</p>
                        <p class="stat__list2--number"><?php the_field('visiteurs'); ?></p>
                        <p class="stat__list2--about">Visiteurs</p>
                    </li>
                    <li class="stat__list2--bloc">
                        <p class="stat__list2--logo">XD</p>
                        <p class="stat__list2--number"><?php the_field('oeuvres'); ?></p>
                        <p class="stat__list2--about">Œuvres</p>
                    </li>
                </ul>
            </li>
            <?php endwhile; endif; ?> 
        </ul>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="<?php dw_asset('js/active.js'); ?>"></script>
        <div class="stat__cta cta">
            <span class="cta__masque">En savoir plus</span>
            <a href="<?php the_permalink(80); ?>" title="Aller vers la page à propos" class="cta__button">En savoir plus</a>
        </div>
    </section>
<?php get_footer(); ?>