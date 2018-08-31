<?php 
/*
    Template Name: PAGE-ACTUALITE
*/
get_header(); ?>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="all-news">
		<h2 class="title__heading2 heading2 hidden" aria-level="2" role="heading">All</h2>
		<?php
            $posts = new WP_Query( ['post_type' => 'actualite', 'posts_per_page' => -1] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
		<div class="all-news__actu">
			<h3  class="all-news__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
			<div class="news__actu--publication_date">
                <time datetime="<?php echo get_the_date('d/m/Y'); ?>">
                    Publié le <?php echo get_the_date('l, j F Y'); ?>
                </time>
            </div>
			<div class="all-news__content">
				<div class="all-news__content--txt">
                    <?php dw_the_excerpt(500); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="all-news__actu--link" title="Aller vers la page de l'actualité <?php get_the_title(); ?>" ><p>Lire la suite</p><span>+</span></a>
			</div>
			<!-- <a href="<?php the_permalink(); ?>" class="all-news__actu--link" title="Aller vers la page de l'actualité <?php get_the_title(); ?>" ><p>Voir l'article</p><span>+</span></a> -->
		</div>
		<?php endwhile; endif; ?>
		
	</section>
<?php get_footer(); ?>