<?php 
/*
    Template Name: PAGE-EVENEMENT
*/
get_header(); ?>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="all-events">
		<h2 class="all-events__heading2 heading2 hidden" aria-level="2" role="heading">All</h2>
		<div class="all-events__filter">
			<form class="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <div>
                    <label for="s" class="screen-reader-text"></label>
                    <input type="text" value="" name="s" id="s" />
                    <input name="searchsubmit" id="searchsubmit" type="submit" value="Rechercher" />
                </div>
                <input type="hidden" name="search-type" value="evenement" />
            </form>

			<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="event_filter">
				
						<?php
							if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
								echo '<select name="event_categoryfilter"><option>Categories...</option>';
								foreach ( $terms as $term ) :
									echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
								endforeach;
								echo '</select>';
							endif;
						?>

				<button class="filtrage">Filter</button>
				 
				<input type="hidden" name="action" value="eventfilter">
			</form>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<script>
				jQuery(function($){
					$('#event_filter').submit(function(){
						var filter = $('#event_filter');
						$.ajax({
							url:filter.attr('action'),
							data:filter.serialize(), // form data
							type:filter.attr('method'), // POST
							beforeSend:function(xhr){
								filter.find('button').text('Chargement...'); // changing the button label
							},
							success:function(data){
								filter.find('button').text('Filtrer'); // changing the button label back
								$('.querty').html(data); // insert data
							}
						});
						return false;
					});
				});
			</script>
		</div>
		<div class="querty">
		<?php
	        $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => -1, 'orderby' => the_field(''), 'order' => 'DESC' ] );
	        if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
	    ?>

		<?php @include('parts/all-events.php'); ?>

		<?php endwhile; endif; ?>
		</div>
	</section>
<?php get_footer(); ?>