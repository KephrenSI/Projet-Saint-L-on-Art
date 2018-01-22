<a class="programmation__event--bloc" href="<?php echo get_permalink( $event->ID ); ?>" title="Aller vers la page de l'évènement <?php get_the_title( $event->ID ); ?>"><span class="hidden">&nbsp;</span>lien temporaire</a>
				<img class="programmation__event--img" width="200" src="<?php echo $photo;?>" alt="Photo de l'évènement <?php the_title( $event->ID );?>">
				<div class="programmation__event--taxonomy">
					<?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
				</div>
				<!-- <div class="programmation__event--date">
					<span class="programmation__event--month"><?php the_field('date_month'); ?></span>
					<span class="programmation__event--day"><?php the_field('date_day'); ?></span>
				</div> -->
				<div class="programmation__event--date">
	                <?php
	                    // get raw date
	                    $date = get_field('date', $event->ID, false, false);
	                    // make date object
	                    $date = new DateTime($date);
	                ?>
	                <span class="programmation__event--month"><?php echo substr($date->format('M'), 0, 4); ?></span>
	                <span class="programmation__event--day"><?php echo $date->format('j'); ?></span>
	            </div>
				<h3  class="programmation__heading3 heading3" aria-level="3" role="heading"><?php echo get_the_title( $event->ID ); ?></h3>
				<div class="programmation__event--social">
					<p class="programmation__event--txt">Partager</p>
					<div class="last-event__event--share">
	                    <a class="artistes__artiste--link" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink( $event->ID ); ?>&t=<?php get_the_title( $location->ID ); ?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>facebook</title>
	                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
	                        </svg>
	                    </a>
	                    <a class="artistes__artiste--link" href="https://twitter.com/intent/tweet/?url=<?php get_permalink( $event->ID ); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>twitter</title>
	                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
	                        </svg>
	                    </a>
	                </div>
				</div>