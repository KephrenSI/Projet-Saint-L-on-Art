<?php 
/*
    Template Name: PAGE-CONTACT
*/
get_header(); ?>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="contact">
		<h2  class="contact__heading2 heading2 hidden" aria-level="2" role="heading">Bloc</h2>
		<section class="introduction">
			<h3  class="introduction__heading3 heading3" aria-level="3" role="heading">Demandez à Bernard</h3>
			<div class="introduction__content">
				<p class="introduction__content--txt">Salut,</p>
				<p class="introduction__content--txt">Je suis à votre disposition si vous avez des questions sur les transports en commun, les billets, l'organisation, l'accessibilité, le parcours, ...</p>
				<p class="introduction__content--txt">Cependant, je vous suggère de consulter d'abord la page Pratique et À propos car nous avons rassemblé beaucoup d'informations utiles dans ces sections.
				Si vous n'avez toujours pas trouvé ce que vous cherchiez ou si vous avez d'autres questions, je serai plus qu'heureux d'y répondre.
				Complétez simplement le formulaire ci-dessous.</p>
				<p class="introduction__content--txt">Pour les artistes souhaitant participer à l'évènement c'est ici que ça se passe, il vous suffit de nous envoyer votre candidature. nous y répondrons dans les plus brefs délais.</p>
				<p class="introduction__content--txt">Au plaisir de vous voir les 18 et 19 Septembre!</p>
				<p class="introduction__content--txt">Bernard</p>
			</div>
			<div class="introduction__cta cta">
                <span class="cta__masque">Tous le programme</span>
                <a href="<?php the_permalink(103); ?>" title="Aller vers la page à propos" class="cta__button">Tous le programme</a>
            </div>
		</section>
		<section class="formulaire">
			<h3  class="formulaire__heading3 heading3" aria-level="3" role="heading">Bonjour, que puis-je faire pour vous ?</h3>
			<?php echo do_shortcode( '[contact-form-7 id="281" title="Contact"]' ); ?>
			<form action="post" class="formulaire__form">

			</form>
		</section>
	</section>
<?php get_footer(); ?>