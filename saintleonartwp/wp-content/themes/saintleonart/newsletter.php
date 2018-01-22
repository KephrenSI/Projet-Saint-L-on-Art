<?php
/*
    Template Name: PAGE-NEWSLETTER
*/
    get_header();
?> 
<style>
    .message{
        margin: 3em;
    }
    .ok{
        color: green;
        font-size: 2.618em;
    }
    .thanks{
        margin: 2em 0;
        font-family: 'goodvibes';
        font-size: 1.618em;
    }
</style>
        <section class="message">
            <h2 aria-level="2" role="heading" class="">
                <span class="ok">
                	Vous êtes abonnées !!
                </span>
                <p class="thanks">L'équipe Saint Léon'Art vous remercie.</p>
            </h2>
            
            <!-- <a href="#" onClick="history.back()">Continuer à consulter le site</a> -->
                <div class="artistes__cta cta">
                <span class="cta__masque">Continuer à consulter le site</span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Aller vers la page des artistes" class="cta__button">Continuer à consulter le site</a>
        </div>
        </section>
<?php
    get_footer();
?>

