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
		<div class="all-news__filter">
			<select>
			  <optgroup label="filtrer par type">
				<!--  custom event taxo -->
				<?php $custom_terms = get_terms('category'); ?>
				<?php foreach($custom_terms as $custom_term):?>
				<?php
				   wp_reset_query();
				   $args = array(
				       'post_type' => 'evenement',
				       'posts_per_page' => -1,
				       'tax_query' => array(
				           array(
				               'taxonomy' => 'category',
				               'field' => 'slug',
				               'terms' => $custom_term->slug,
				           )
				       )
				   );
				?>
				<?php $loop = new WP_Query($args); ?>
				<?php if($loop->have_posts()): ?>
				   <option value="<?php $custom_term->name; ?>"><?php echo $custom_term->name; ?></option>
				<?php endif; endforeach; ?>

			  </optgroup>
			  <optgroup label="filtrer par date">
			    <option value="recent">Plus récent</option>
				<option value="ancien">Plus ancien</option>
			  </optgroup>
			</select>
		</div>
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
			<!-- <div class="all-news__actu--date">
				<span class="all-news__actu--month">SEP</span>
				<span class="all-news__actu--day">24</span>
			</div> -->
			<div class="all-news__actu--taxonomy">
				<?php dw_the_category(', ', '<strong class="">', '</strong>'); ?>
			</div>
			<div class="all-news__content">
				<div class="all-news__content--txt">
                    <?php dw_the_excerpt(500); ?>
                </div>
			</div>
			<a href="<?php the_permalink(); ?>" class="all-news__actu--link" title="Aller vers la page de l'actualité <?php get_the_title(); ?>" ><p>Voir l'article</p><span>+</span></a>
		</div>
		<?php endwhile; endif; ?>
		<!-- <div class="all-news__load">
			<a href="#" title="Aller vers la page à propos" >Afficher plus d'évènements</a>
			<span>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
				<title>spinner2</title>
				<path d="M32 16c-0.040-2.089-0.493-4.172-1.331-6.077-0.834-1.906-2.046-3.633-3.533-5.060-1.486-1.428-3.248-2.557-5.156-3.302-1.906-0.748-3.956-1.105-5.981-1.061-2.025 0.040-4.042 0.48-5.885 1.292-1.845 0.809-3.517 1.983-4.898 3.424s-2.474 3.147-3.193 4.994c-0.722 1.846-1.067 3.829-1.023 5.79 0.040 1.961 0.468 3.911 1.254 5.694 0.784 1.784 1.921 3.401 3.316 4.736 1.394 1.336 3.046 2.391 4.832 3.085 1.785 0.697 3.701 1.028 5.598 0.985 1.897-0.040 3.78-0.455 5.502-1.216 1.723-0.759 3.285-1.859 4.574-3.208 1.29-1.348 2.308-2.945 2.977-4.67 0.407-1.046 0.684-2.137 0.829-3.244 0.039 0.002 0.078 0.004 0.118 0.004 1.105 0 2-0.895 2-2 0-0.056-0.003-0.112-0.007-0.167h0.007zM28.822 21.311c-0.733 1.663-1.796 3.169-3.099 4.412s-2.844 2.225-4.508 2.868c-1.663 0.646-3.447 0.952-5.215 0.909-1.769-0.041-3.519-0.429-5.119-1.14-1.602-0.708-3.053-1.734-4.25-2.991s-2.141-2.743-2.76-4.346c-0.621-1.603-0.913-3.319-0.871-5.024 0.041-1.705 0.417-3.388 1.102-4.928 0.683-1.541 1.672-2.937 2.883-4.088s2.642-2.058 4.184-2.652c1.542-0.596 3.192-0.875 4.832-0.833 1.641 0.041 3.257 0.404 4.736 1.064 1.48 0.658 2.82 1.609 3.926 2.774s1.975 2.54 2.543 4.021c0.57 1.481 0.837 3.064 0.794 4.641h0.007c-0.005 0.055-0.007 0.11-0.007 0.167 0 1.032 0.781 1.88 1.784 1.988-0.195 1.088-0.517 2.151-0.962 3.156z"></path>
				</svg>
            </span>
		</div> -->
		<div class="all-news__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
        </div>
	</section>
<?php get_footer(); ?>