<?php 
/*
    Template Name: PAGE-ARTISTE
*/
get_header(); ?>
	<section class="title">
		<h2  class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="all-artistes">
		<h2  class="all-artistes__heading2 heading2 hidden" aria-level="2" role="heading">bloc</h2>
		<div class="all-artistes__filter">
			<form class="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <div>
                    <label for="s" class="screen-reader-text"></label>
                    <input type="text" value="" name="s" id="s" />
                    <input name="searchsubmit" id="searchsubmit" type="submit" value="Rechercher" />
                </div>
                <input type="hidden" name="search-type" value="artiste" />
            </form>

			<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
						<?php
							if( $terms = get_terms( 'discipline', 'orderby=name' ) ) : // to make it simple I use default categories
								echo '<select name="disciplinefilter"><option>Disciplines...</option>';
								foreach ( $terms as $term ) :
									echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
								endforeach;
								echo '</select>';
							endif;
						?>
				<button class="filtrage">Filter</button>
				<input type="hidden" name="action" value="myfilter">
			</form>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<script>
				jQuery(function($){
					$('#filter').submit(function(){
						var filter = $('#filter');
						$.ajax({
							url:filter.attr('action'),
							data:filter.serialize(), // form data
							type:filter.attr('method'), // POST
							beforeSend:function(xhr){
								filter.find('button').text('Chargement...'); // changing the button label
							},
							success:function(data){
								filter.find('button').text('Filtrer'); // changing the button label back
								$('.azerty').html(data); // insert data
							}
						});
						return false;
					});
				});
			</script>
		</div>
		<div class="azerty">
			<?php
	            $posts = new WP_Query( ['post_type' => 'artiste', 'posts_per_page' => -1, 'orderby' => the_field(''), 'order' => 'DESC'] );
	            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
	        ?>
				
			<?php @include('parts/all-artists.php'); ?>
			
			<?php endwhile; endif; ?>
		</div>
	</section>
<?php get_footer(); ?>