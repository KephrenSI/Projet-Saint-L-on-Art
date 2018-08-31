<?php $args = array( 'post_type' => 'evenement' );
$args = array_merge( $args, $wp_query->query );
query_posts( $args ); ?>
<?php if ( 'evenement' == get_post_type() ): ?>
    <section class="title">
        <h2  class="title__heading2 heading2" aria-level="2" role="heading">Résultats de la recherche</h2>
    </section>
    <section class="all-events" style="margin-top: 10em;">
        <div class="all-events__filter">


            <form class="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <div>
                    <label for="s" class="screen-reader-text"></label>
                    <input type="text" value="" name="s" id="s" />
                    <input name="searchsubmit" id="searchsubmit" type="submit" value="Rechercher" />
                </div>
                <input type="hidden" name="search-type" value="evenement" />
            </form>
            <div class="querty">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php include('parts/all-events.php'); ?>
                <?php endwhile; else : ?>
                    <div class="">
                        Oups... Rien n'a été trouvé...
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <div class="all-events__cta cta">
            <span class="cta__masque">Retour</span>
            <a href="javascript://" onclick="history.back();" title="Aller vers la page à propos" class="cta__button">Retour</a>
        </div>

        <?php else: ?>
            <h3 class="heading3" style="margin: 2em 3em; ">Désolé, nous n'avons pas trouvé de résultat à votre recherche.</h3>
            <div class="all-artistes__cta cta" style="margin: 0 3em 5em; ">
                <span class="cta__masque">Retour</span>
                <a href="javascript://" onclick="history.back();" title="Aller vers la page à propos" class="cta__button">Retour</a>
            </div>
        <?php endif; ?>