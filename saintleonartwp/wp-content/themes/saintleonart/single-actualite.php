<?php 
/*
    Template Name: SINGLE-ACTUALITE
*/
get_header(); ?>
	<section class="title">
		<h2  class="title__heading2 heading2 single-new-heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<div class="background">
		<article class="single-article" itemscope itemtype="http://schema.org/Article">
			<h2  class="single-article__heading2 heading2 hidden" aria-level="2" role="heading">article</h2>
			<div class="single-article__date">
				<p class="single-article__date--txt">Le 27 avril 2018</p>
			</div>
			<div class="single-article__date">
				<p class="single-article__date--txt"><time class="single-article__date--time"  itemprop="dateCreated" datetime="<?php the_time('c'); ?>"><?php the_field('date'); ?></time></p>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="single-article__bloc">
				<div class="single-event__bloc--txt" itemprop="text"><?php the_content(); ?></div>
			</div>
			<?php endwhile; endif; ?>
			<div class="single-article__auteur">
				<p class="single-article__auteur--txt">Ecrit par <span itemprop="creator" class="single-article__auteur--name"><?php the_field('auteur'); ?></span></p>
			</div>
			<div class="single-article__find">
				<h3  class="single-article__heading3 heading3" aria-level="3" role="heading">Partagez</h3>
				<a class="single-article__find--link" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Aller vers la page Facebook">
					<span class="hidden">&nbsp;</span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                    <title>facebook</title>
	                    <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
	                </svg>
				</a>
	            <a class="single-article__find--link" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" title="Aller vers la page Twitter">
	            	<span class="hidden">&nbsp;</span>
	                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                    <title>twitter</title>
	                    <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
	                </svg>
	            </a>
			</div>
			<div class="single-article__cta cta">
	            <span class="cta__masque">Tous les voir</span>
	            <a href="<?php the_permalink(62); ?>" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
	        </div>
		</article>
	</div>
<?php get_footer(); ?>