<?php $args = array( 'post_type' => 'artiste' );
$args = array_merge( $args, $wp_query->query );
query_posts( $args ); ?>

<?php if ( 'artiste' == get_post_type() ): ?>
    <section class="title">
        <h2  class="title__heading2 heading2" aria-level="2" role="heading">Résultats de la recherche</h2>
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

            <!-- <?php
                // Output a search for that only searches portfolio post types
                $search = get_search_form( false );
                $find = '</form>';
                $replace = '<input type="hidden" name="post_type" value="artiste">' . $find;
                $search = str_replace( $find, $replace, $search );
                echo $search;
            ?> -->
            <div class="azerty">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php include('parts/all-artists.php'); ?>
                <?php endwhile; else : ?>
                	<div class="" style="margin: 10em;">
                		Oups... Rien n'a été trouvé...
                	</div>
                <?php endif; ?>
            </div>
        </section>
        <div class="all-artistes__cta cta">
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