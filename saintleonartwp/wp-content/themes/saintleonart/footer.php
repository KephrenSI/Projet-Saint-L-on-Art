<section class="newsletter">
            <h2  class="newsletter__heading2 heading2" aria-level="2" role="heading">Newsletter</h2>
            <form action="post" class="newsletter__form">
                <div class="newsletter__form--bloc">
                    <input class="newsletter__form--input" type="email" name="user_email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" id="user_email" placeholder="Email@example.com">
                    <label class="newsletter__form--label" for="user_email">Email</label>
                    <span class="focus-border"></span>
                </div>
                <!-- <input class="newsletter__form--submit" type="submit" value="S'inscrire"> -->
                <div class="cta">
                    <span class="cta__masque">S'inscrire</span>
                    <button class="cta__submit" type="button" name="Hover">S'inscrire</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">
        <h2  class="footer__heading2 heading2 hidden" aria-level="2" role="heading">Footer</h2>
        <section class="global">
            <h3  class="global__heading3 heading3 hidden" aria-level="3" role="heading">Infos globales</h3>
            <div class="presentation">
                <h4  class="presentation__heading4 heading4" aria-level="4" role="heading">Saint Léon'Art</h4>
                <div class="presentation__content">
                    <p class="presentation__content--txt">
                        <span>Saint Léon'Art,</span> c'est un vaste parcours artistique citoyen, mis sur pied par les artistes eux-mêmes et les associations du quartier Saint-Léonard.
                    </p>
                    <p class="presentation__content--txt">
                        Ce site web vous présente la programmation de l'édition 2018 et permet aux artistes de s'inscrire à l'évènement via la page contact.
                    </p>
                    <!-- <div class="presentation__share">
                        <a class="presentation__share--link" href="#" title="Aller vers la page Facebook">Facebook</a>
                        <a class="presentation__share--link" href="#" title="Aller vers la page Twitter">Twitter</a>
                    </div> -->
                    <!-- <div class="presentation__cta cta">
                        <a href="#" title="Aller vers la page à propos" >En savoir plus</a>
                    </div> -->
                </div>
                <div class="presentation__cta cta">
                    <span class="cta__masque">En savoir plus</span>
                    <a href="#" title="Aller vers la page à propos" class="cta__button">En savoir plus</a>
                </div>
            </div>
            <div class="infos">
                <h4  class="infos__heading4 heading4" aria-level="4" role="heading">Informations</h4>
                <div class="infos__content">
                    <p class="infos__content--txt">Organiser par <a class="infos__content--link" href="#"><?php the_field('nom', 80); ?></a></p>
                    <a class="infos__content--link" href="mailto:<?php the_field('email', 80); ?>" title="Envoyer un mail à <?php the_field('nom', 80); ?>"><?php the_field('email', 80); ?></a>
                    <a class="infos__content--link" href="tel:<?php the_field('telephone', 80); ?>" title="Telephoner chez <?php the_field('nom', 80); ?>"><?php the_field('telephone', 80); ?></a>
                </div>
                <!-- <div class="infos__cta cta">
                    <span class="cta__masque">En savoir plus</span>
                    <button class="cta__button" type="button" name="Hover">En savoir plus</button>
                </div> -->
                <div class="infos__cta cta">
                    <span class="cta__masque">En savoir plus</span>
                    <a href="#" title="Aller vers la page à propos" class="cta__button">En savoir plus</a>
                </div>
            </div>
            <div class="footer-nav">
                <nav class="last-nav">
                    <h4 class="last-nav__heading4 heading4" aria-level="4" role="heading">Navigation</h4>
                    <div class="nav">
                        <ul class="last-nav__list">
                            <?php foreach (dw_get_nav_items('header') as $item): ?>
                                <li class="last-nav__list--elt">
                                    <?php if(!$item->children): ?>
                                    <a href="<?php echo $item->link; ?>" title="Aller vers la page page <?php echo $sub->label; ?>" class="last-nav__list--link <?php echo $item -> isCurrent ? ' active' : ''; ?>"><?php echo $item->label; ?></a>
                                    <?php else: ?>
                                    <span class="last-nav__list--submenu submenu"><?php echo $item->label; ?></span>
                                    <ul class="submenu__list">
                                        <?php foreach($item->children as $sub): ?>
                                        <li class="submenu__list--elt">
                                            <a href="<?php echo $sub->link; ?>" title="Aller vers la page pages <?php echo $sub->label; ?>" class="submenu__list--link <?php echo $item -> isCurrent ? ' actived' : ''; ?>"><?php echo $sub->label; ?></a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                            <!-- <li class="last-nav__list--elt">
                                <a href="#" title="Recharger la page d'accueil" class="last-nav__list--link active">Accueil</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/programme.html" title="Aller vers la page du programme" class="submenu__list--link">Programme</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/agenda.html" title="Aller vers la page de l'agenda" class="last-nav__list--link">Agenda</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/artistes.html" title="Aller vers la page des artistes" class="last-nav__list--link">Artistes</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/events.html" title="Aller vers la page des évènements" class="last-nav__list--link">Évènements</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/news.html" title="Aller vers la page des actualités" class="last-nav__list--link">Actualités</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/pratique.html" title="Aller sur la page des infos pratiques" class="last-nav__list--link">Infos pratiques</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/partenaires.html" title="Aller sur la page des partenaires" class="last-nav__list--link">Partenaires</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/about.html" title="Aller sur la page à propos" class="last-nav__list--link">À propos</a>
                            </li>
                            <li class="last-nav__list--elt">
                                <a href="./assets/html/contact.html" title="Aller sur la page de contact" class="last-nav__list--link">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <section class="partenaire">
            <h4  class="partenaire__heading4 heading4" aria-level="4" role="heading">Partenaires</h4>
            <div class="partenaire__bloc">
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/crc.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/vi.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/pac.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/calg.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/liege.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/ravi.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/arsenic.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/pdl.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/cpcr.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/cgsl.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/naos.png" alt="logo de la province de liège" width="100"></a>
                <a href="#" title="Aller vers le site de la province de liège" class="partenaire__bloc--link"><img src="./assets/img/lehangar.png" alt="logo de la province de liège" width="100"></a>
            </div>
            <!-- <div class="partenaire__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <button class="cta__button" type="button" name="Hover">Tous les voir</button>
            </div> -->
            <div class="partenaire__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
            </div>
        </section>
        <section class="reseaux">
            <h3  class="reseaux__heading3 heading3 hidden" aria-level="3" role="heading">Liens sociaux</h3>
            <div class="reseaux__social">
                <a class="reseaux__social--link" href="#" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>facebook</title>
                        <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                    </svg>
                </a>
                <a class="reseaux__social--link" href="#" title="Aller vers la page Instagram"><span class="hidden">&nbsp;</span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>twitter</title>
                        <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                    </svg>
                </a>
                <a class="reseaux__social--link" href="#" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
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
            <h3  class="cpr__heading3 heading3 hidden" aria-level="3" role="heading">Droits</h3>
            <p class="cpr__txt">© Copyright 2017-2018 | <?php bloginfo('name') ?> tous droits réservés.</p>
        </section>
    </footer>
    <?php if( is_user_logged_in() ) wp_footer(); ?>
</body>
</html>