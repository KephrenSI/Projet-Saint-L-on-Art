    <section class="newsletter" id="abonnement">
        <h2  class="newsletter__heading2 heading2" aria-level="2" role="heading">Newsletter</h2>

        <!-- <form class="newsletter__form" method="post" action="<?php //home_url('/'); ?>?na=s" onsubmit="return newsletter_check(this)"> -->
            <form class="newsletter__form" method="post" action="#abonnement" onsubmit="return newsletter_check(this)">
            <div class="tnp-field tnp-field-email newsletter__form--bloc">
                <input id="ne" class="newsletter__form--input input tnp-email" type="email" name="ne" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" placeholder="Email@example.com" required>
                <label class="newsletter__form--label" for="ne">Email</label>
                <span class="focus-border"></span>
            </div>


            <?php if($_SERVER['REQUEST_METHOD'] == 'POST') :  ?>
                <div class="newsletter__confirmation">
                    <p class="newsletter__confirmation-txt">
                        Vous êtes bien inscrit à la newsletter de Saint Léon'Art! Vous allez bientôt recevoir un email de confirmation.
                    </p>
                </div>
            <?php endif; ?>


            <div class="cta cta-bug tnp-field tnp-field-button">
                <span class="cta__masque">S'inscrire</span>
                <button class="cta__submit btn btn--anim tnp-submit cta__btn-bug" type="submit" name="Hover" data-text="Inscritpion au newsletter">S'inscrire</button>
            </div>
        </form>



    </section>
    </main>
    <footer class="footer">
        <section class="global">
            <h2  class="global__heading2 heading2 hidden" aria-level="2" role="heading">Infos globales</h2>
            <div class="presentation">
                <h3  class="presentation__heading3 heading3" aria-level="3" role="heading">Saint Léon'Art</h3>
                <div class="presentation__content">
                    <div class="presentation__content--txt">
                        <?php the_field('text_de_presentation', 38); ?>
                    </div>
                </div>
                <div class="presentation__cta cta">
                    <span class="cta__masque">En savoir plus</span>
                    <a href="<?php the_permalink(80); ?>" title="Aller vers la page à propos" class="cta__button">En savoir plus</a>
                </div>
            </div>
            <div class="infos">
                <h3  class="infos__heading3 heading3" aria-level="3" role="heading">Informations</h3>
                <div class="infos__content">
                    <p class="infos__content--txt">Organiser par <a class="infos__content--link" title="Aller sur le site de <?php the_field('nom', 80); ?>" href="#">Lencreuse</a></p>
                    <a class="infos__content--link" href="mailto:<?php the_field('email', 80); ?>" title="Envoyer un mail à <?php the_field('nom', 80); ?>"><?php the_field('email', 80); ?></a>
                    <a class="infos__content--link" href="tel:<?php the_field('telephone', 80); ?>" title="Telephoner chez <?php the_field('nom', 80); ?>"><?php the_field('telephone', 80); ?></a>
                </div>
                <div class="infos__cta cta">
                    <span class="cta__masque">En savoir plus</span>
                    <a href="<?php the_permalink(80); ?>" title="Aller vers la page à propos" class="cta__button">En savoir plus</a>
                </div>
            </div>
            <div class="footer-nav">
                <nav class="last-nav">
                    <h3 class="last-nav__heading3 heading3" aria-level="3" role="heading">Navigation</h3>
                    <div class="nav">
                        <ul class="last-nav__list">
                            <?php foreach (dw_get_nav_items('footer-menu') as $item): ?>
                                <li class="last-nav__list--elt">
                                    <a href="<?php echo $item->link; ?>" title="Aller vers la page <?php echo $item->label; ?>" class="last-nav__list--link <?php echo $item -> isCurrent ? ' active' : ''; ?>"><?php echo $item->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <section class="partenaire">
            <h2  class="partenaire__heading2 heading2 hidden" aria-level="2" role="heading">Partenaires</h2>
            <div class="partenaire__bloc">
                <?php
                $args = array( 'post_type' => 'partners', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args );
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $fields = get_field('logo'); ?>
                    <a href="<?php the_field('url'); ?>" title="Aller vers le site du partenaire <?php the_title(); ?>" class="partenaire__bloc--link"><img src="<?php echo $fields['url']; ?>" alt="logo du partenaire <?php the_title(); ?>" width="80"></a>
                <?php endwhile; endif; ?>
            </div>
            <div class="partenaire__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <a href="<?php the_permalink(64); ?>" title="Aller vers la page des partenaires" class="cta__button">Tous les voir</a>
            </div>
        </section>
        <section class="reseaux">
            <h2  class="reseaux__heading2 heading2 hidden" aria-level="2" role="heading">Liens sociaux</h2>
            <div class="reseaux__social">
                <a class="reseaux__social--link" href="https://www.facebook.com/" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>facebook</title>
                        <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                    </svg>
                </a>
                <a class="reseaux__social--link" href="https://www.instagram.com/?hl=fr" title="Aller vers la page Instagram"><span class="hidden">&nbsp;</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>twitter</title>
                        <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                    </svg>
                </a>
                <a class="reseaux__social--link" href="https://twitter.com/?lang=fr" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>instagram</title>
                        <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                        <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                        <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                    </svg>
                </a>
            </div>
        </section>
        <section class="cpr">
            <h2  class="cpr__heading2 heading2 hidden" aria-level="2" role="heading">Droits</h2>
            <p class="cpr__txt">© Copyright 2017-2018 | <?php bloginfo('name') ?> tous droits réservés.</p>
        </section>
    </footer>
    <?php //if( is_user_logged_in() ) wp_footer(); ?>
</body>
</html>