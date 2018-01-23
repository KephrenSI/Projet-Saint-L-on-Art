<?php get_header(); ?>
    <section class="banner">
        <h2  class="banner__heading2 heading2 hidden" aria-level="2" role="heading">Banner</h2>
        <div class="banner__date">
            <?php 
                $rows = get_field( 'dates' ); 
                $date_content = $rows[0]['date'];
                
                $end_row = end( $rows );
                $last_date_content = $end_row['date'];

                $date_content_array = explode(' ', $date_content);
                $last_date_content_array = explode(' ', $last_date_content);
            ?>
            <p class="banner__date--txt"><?php echo $date_content_array[0];  ?> - <?php echo $last_date_content_array[0]; ?></p>
            <p class="banner__date--txt"><?php echo $date_content_array[1]; ?></p>
            <p class="banner__date--txt"><?php echo $date_content_array[2]; ?></p>
        </div>
        <div class="banner__logo-shape">
            <svg class="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 74"><title>138_saint_leonart_logo-03</title><path class="cls-1" d="M100.4,70.78A29.62,29.62,0,1,1,70.77,41.16,29.62,29.62,0,0,1,100.4,70.78" transform="translate(-37.43 -33.7)"/><rect class="cls-2" x="17.87" y="3.04" width="30.94" height="68.08"/><polygon class="cls-3" points="66.69 39.59 0 0 0 34.41 0 34.57 66.69 74.15 66.69 39.74 66.69 39.59"/></svg>
        </div>
        <div class="banner__slogan">
            <div class="banner__slogan--txt">
                <?php bloginfo('description'); ?>
            </div>
        </div>
    </section>
    <section class="intro">
        <h2  class="intro__heading2 heading2" aria-level="2" role="heading">Saint Léon'Art</h2>
        <div class="intro__content">
            <div class="intro__content--txt">
                <?php the_field('text_dintroduction'); ?>
            </div>
            <div class="intro__cta cta">
                <span class="cta__masque">En savoir plus</span>
                <a href="<?php the_permalink(80); ?>" title="Aller vers la page à propos ?>" class="cta__button">En savoir plus</a>
            </div>
        </div>
    </section>
    <section class="artistes">
        <h2  class="artistes__heading2 heading2" aria-level="2" role="heading">Artistes</h2>
        <a class="artistes__random" href="javascript:window.location.reload(true)" title="Artistes aléatoire de l'expo Saint Léon'Art">
            mélanger
            <span class="shuffle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                <title>shuffle</title>
                <path class="shuffle" d="M24 22h-3.172l-5-5 5-5h3.172v5l7-7-7-7v5h-4c-0.53 0-1.039 0.211-1.414 0.586l-5.586 5.586-5.586-5.586c-0.375-0.375-0.884-0.586-1.414-0.586h-6v4h5.172l5 5-5 5h-5.172v4h6c0.53 0 1.039-0.211 1.414-0.586l5.586-5.586 5.586 5.586c0.375 0.375 0.884 0.586 1.414 0.586h4v5l7-7-7-7v5z"></path>
                </svg>
            </span>
        </a>
        <?php
            $posts = new WP_Query( ['post_type' => 'artiste', 'posts_per_page' => 4, 'orderby' => 'rand'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="artistes__artiste">
            <a class="artistes__artiste--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'artiste <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
            <img class="artistes__artiste--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'artiste <?php the_title();?>">
            <div class="artistes__artiste--taxonomy">
                <?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
            </div>
            <h3  class="artistes__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
            <?php if(get_field('facebook') || get_field('instagram') || get_field('twitter')): ?>
            <div class="artistes__artiste--social">
                <p class="artistes__artiste--txt">Suivre</p>
                <div class="artistes__artiste--follow">
                    <?php if(get_field('facebook')): ?>
                    <a class="artistes__artiste--link" href="<?php the_field('facebook'); ?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>facebook</title>
                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(get_field('instagram')): ?>
                    <a class="artistes__artiste--link" href="<?php the_field('instagram'); ?>" title="Aller vers la page Instagram"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>instagram</title>
                            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(get_field('twitter')): ?>
                    <a class="artistes__artiste--link" href="<?php the_field('twitter'); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
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
        <div class="artistes__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="<?php the_permalink(24); ?>" title="Aller vers la page des artistes" class="cta__button">Tous les voir</a>
        </div>
    </section>
    <section class="last-event">
        <h2  class="last-event__heading2 heading2" aria-level="2" role="heading">Prochain Évènements</h2>
        <?php
            $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => 4,'orderby' => the_field(''), 'order' => 'DESC' ] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="last-event__event">
            <a class="last-event__event--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'évènement <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
            <img class="last-event__event--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'évènement <?php the_title();?>">
            <div class="last-event__event--taxonomy">
                <?php dw_the_category(', ', '<strong class="">', '</strong>'); ?>
            </div>
            <div class="last-event__event--date">
                <time datetime="<?php the_field('date'); ?>">
                    <?php
                       // DATE Langue
                       $dateformatstringmonth = "M";
                       $dateformatstringday = "j";
                       $unixtimestamp = strtotime(get_field('date', false, false));

                       
                    ?>
                    <span class="last-event__event--month"><?php echo date_i18n($dateformatstringmonth, $unixtimestamp); ?></span>
                    <span class="last-event__event--day"><?php echo date_i18n($dateformatstringday, $unixtimestamp); ?></span>
                </time>
            </div>

            <h3  class="last-event__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
            <div class="last-event__event--social">
                <p class="last-event__event--txt">Partager</p>
                <div class="last-event__event--share">
                    <a class="artistes__artiste--link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title();?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>facebook</title>
                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                        </svg>
                    </a>
                    <a class="artistes__artiste--link" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>twitter</title>
                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
        </div>
        <?php endwhile; endif; ?>
        <div class="last-event__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="<?php the_permalink(21); ?>" title="Aller vers la page des évènements" class="cta__button">Tous les voir</a>
        </div>
    </section>
    <section class="news">
        <h2  class="news__heading2 heading2" aria-level="2" role="heading">Dernières actualités</h2>
        <?php
            $posts = new WP_Query( ['post_type' => 'actualite', 'posts_per_page' => 4] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="news__actu">
            <h3  class="news__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
            <div class="news__actu--publication_date">
                <time datetime="<?php echo get_the_date('d/m/Y'); ?>">
                    Publié le <?php echo get_the_date('l j F Y'); ?>
                </time>
            </div>
            <div class="news__content">
                <div class="news__content--txt">
                    <?php dw_the_excerpt(500); ?>
                </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="news__actu--link" title="Aller vers la page de l'actualité <?php get_the_title(); ?>" ><p>Voir l'article</p><span>+</span></a>
        </div>
        <?php endwhile; endif; ?>
        <div class="news__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="<?php the_permalink(62); ?>" title="Aller vers la page des actualités" class="cta__button">Tous les voir</a>
        </div>
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
    <?php $data = wp_get_the_gram(); ?>
    <?php if ($data): ?>
    <section class="insta">
        <h2  class="insta__heading2 heading2" aria-level="2" role="heading">Fils instagram</h2>
        <div class="insta__bloc">
            <?php foreach ($data as $item): ?>
                <?php 
                    $width = $item->images->low_resolution->width; 
                    $height = $item->images->low_resolution->height; 
                    $url = $item->images->low_resolution->url; 
                ?>
                <img class="insta__bloc--pics" src="<?= $url ?>" alt="Dernière photo postée sur le compte instagram de Saintléonart" width="<?= $width ?>" height="<?= $height ?>">
                <img class="insta__bloc--pics" src="<?= $url ?>" alt="Dernière photo postée sur le compte instagram de Saintléonart" width="<?= $width ?>" height="<?= $height ?>">
                <!-- <img class="insta__bloc--pics" src="<?= $url ?>" alt="Dernière photo postée sur le compte instagram de Saintléonart" width="<?= $width ?>" height="<?= $height ?>"> -->
                <!-- <img class="insta__bloc--pics" src="<?= $url ?>" alt="Dernière photo postée sur le compte instagram de Saintléonart" width="<?= $width ?>" height="<?= $height ?>"> -->
                <?php //var_dump( $item->images->low_resolution ); ?>
            <?php endforeach; ?>
        </div>
        <div class="insta__cta cta">
            <span class="cta__masque">Aller sur Insta</span>
            <a href="https://www.instagram.com/?hl=fr" title="Aller sur la page Instagram de l'expo Saint Léon'Art" class="cta__button">Aller sur Insta</a>
        </div>
    </section>
    <?php endif; ?>
<?php get_footer(); ?>