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
			<select>
				<optgroup label="filtrer par type">
					<!--  custom event taxo -->
					<?php $custom_terms = get_terms('discipline'); ?>
					<?php foreach($custom_terms as $custom_term):?>
					<?php
					   wp_reset_query();
					   $args = array(
					       'post_type' => 'artiste',
					       'posts_per_page' => -1,
					       'tax_query' => array(
					           array(
					               'taxonomy' => 'discipline',
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
				<optgroup label="filtrer par Nom">
					<option value="recent">A - Z</option>
					<option value="ancien">Z - A</option>
				</optgroup>
				<optgroup label="filtrer par lieu">
					<!-- custom lieu -->
					<?php $args = array( 'post_type' => 'lieux', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					   <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
					<?php endwhile; endif; ?>
				</optgroup>
			</select>
		</div>
		<?php
            $posts = new WP_Query( ['post_type' => 'artiste', 'posts_per_page' => -1, 'orderby' => the_field(''), 'order' => 'DESC'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="all-artistes__artiste">
			<a class="all-artistes__artiste--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'artiste <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
			<img class="all-artistes__artiste--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profile de l'artiste <?php the_title();?>">
			<div class="all-artistes__artiste--taxonomy">
				<?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
			</div>
			<h3  class="all-artistes__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
			<?php if(get_field('facebook') || get_field('instagram') || get_field('twitter')): ?>
            <div class="all-artistes__artiste--social">
                <p class="all-artistes__artiste--txt">Suivre</p>
                <div class="all-artistes__artiste--follow">
                    <?php if(get_field('facebook')): ?>
                    <a class="all-artistes__artiste--link" href="<?php the_field('facebook'); ?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>facebook</title>
                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(get_field('instagram')): ?>
                    <a class="all-artistes__artiste--link" href="<?php the_field('instagram'); ?>" title="Aller vers la page Instagram"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>instagram</title>
                            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(get_field('twitter')): ?>
                    <a class="all-artistes__artiste--link" href="<?php the_field('twitter'); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>twitter</title>
                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
		</div>
		<?php endwhile; endif; ?>
		<!-- <div class="all-artistes__load">
			<a href="#" title="Aller vers la page à propos" >Afficher plus d'artistes</a>
			<span>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
				<title>spinner2</title>
				<path d="M32 16c-0.040-2.089-0.493-4.172-1.331-6.077-0.834-1.906-2.046-3.633-3.533-5.060-1.486-1.428-3.248-2.557-5.156-3.302-1.906-0.748-3.956-1.105-5.981-1.061-2.025 0.040-4.042 0.48-5.885 1.292-1.845 0.809-3.517 1.983-4.898 3.424s-2.474 3.147-3.193 4.994c-0.722 1.846-1.067 3.829-1.023 5.79 0.040 1.961 0.468 3.911 1.254 5.694 0.784 1.784 1.921 3.401 3.316 4.736 1.394 1.336 3.046 2.391 4.832 3.085 1.785 0.697 3.701 1.028 5.598 0.985 1.897-0.040 3.78-0.455 5.502-1.216 1.723-0.759 3.285-1.859 4.574-3.208 1.29-1.348 2.308-2.945 2.977-4.67 0.407-1.046 0.684-2.137 0.829-3.244 0.039 0.002 0.078 0.004 0.118 0.004 1.105 0 2-0.895 2-2 0-0.056-0.003-0.112-0.007-0.167h0.007zM28.822 21.311c-0.733 1.663-1.796 3.169-3.099 4.412s-2.844 2.225-4.508 2.868c-1.663 0.646-3.447 0.952-5.215 0.909-1.769-0.041-3.519-0.429-5.119-1.14-1.602-0.708-3.053-1.734-4.25-2.991s-2.141-2.743-2.76-4.346c-0.621-1.603-0.913-3.319-0.871-5.024 0.041-1.705 0.417-3.388 1.102-4.928 0.683-1.541 1.672-2.937 2.883-4.088s2.642-2.058 4.184-2.652c1.542-0.596 3.192-0.875 4.832-0.833 1.641 0.041 3.257 0.404 4.736 1.064 1.48 0.658 2.82 1.609 3.926 2.774s1.975 2.54 2.543 4.021c0.57 1.481 0.837 3.064 0.794 4.641h0.007c-0.005 0.055-0.007 0.11-0.007 0.167 0 1.032 0.781 1.88 1.784 1.988-0.195 1.088-0.517 2.151-0.962 3.156z"></path>
				</svg>
            </span>
		</div> -->
		<div class="all-artistes__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
        </div>
	</section>
<?php get_footer(); ?>