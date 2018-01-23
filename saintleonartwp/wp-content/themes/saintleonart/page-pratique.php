<?php 
/*
	Template Name: PAGE-PRATIQUE
*/
get_header(); ?>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="pratique">
		<h2 class="title__heading2 heading2 hidden" aria-level="2" role="heading">Infos</h2>
		<ul class="pratique__list">
    		<li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info1">Infos pratiques</a>
            </li>
    		<li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info2">Lieux</a>
            </li>
    		<li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info3">Parkings</a>
            </li>
            <li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info4">Accès</a>
            </li>
            <li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info5">Transports en communs</a>
            </li>
            <li class="pratique__list--elt">
                <a class="pratique__list--link" href="#info6">Autres</a>
            </li>
    	</ul>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="<?php dw_asset('js/active.js'); ?>"></script>
        <script src="<?php dw_asset('js/scrollfixed.js'); ?>"></script>
    	<ul  class="pratique__list2">
			<li class="pratique__list2--elt" id="info1">
				<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Infos pratiques</h3>
				<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Objets trouvés</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('objets_trouves'); ?>
                    </div>
                </div>
				<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Dates</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('Date'); ?>
                    </div>
				</div>
				<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Pour qui ?</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('pour_qui'); ?>
                    </div>
				</div>
				<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Précautions</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('precautions'); ?>
                    </div>
				</div>
            </li> 
            <li class="pratique__list2--elt" id="info2">
            	<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Lieux</h3>
            	<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Localisation</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('localisation'); ?>
                    </div>
				</div>
            </li> 
            <li class="pratique__list2--elt" id="info3">
            	<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Parkings</h3>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">À propos</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('tout_publique'); ?>
                    </div>
            	</div>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Riverain</h4>
            		<div class="pratique__bloc--txt">
                        <?php the_field('riverain'); ?>
                    </div>
            	</div>
            </li> 
            <li class="pratique__list2--elt" id="info4">
            	<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Accès</h3>
            	<div class="pratique__bloc">
					<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Accessibilité</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('accessibilite'); ?>
                    </div>
            	</div>
            </li>
            <li class="pratique__list2--elt" id="info5">
            	<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Transports en communs</h3>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Train</h4>
            		<div class="pratique__bloc--txt">
                        <?php the_field('train'); ?>
                    </div>
            	</div>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Bus</h4>
            		<div class="pratique__bloc--txt">
                        <?php the_field('bus'); ?>
            		</div>
            	</div>
                <div class="pratique__bloc">
                    <h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Voiture</h4>
                    <div class="pratique__bloc--txt">
                        <?php the_field('voiture'); ?>
                    </div>
                </div>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">Vélo</h4>
            		<div class="pratique__bloc--txt">
                        <?php the_field('velo'); ?>
            		</div>
            	</div>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">à pied</h4>
            		<div class="pratique__bloc--txt">
                        <?php the_field('pietons'); ?>
            		</div>
            	</div>
            </li>
            <li class="pratique__list2--elt" id="info6">
            	<h3 class="pratique__heading3 heading3" aria-level="3" role="heading">Autre</h3>
            	<div class="pratique__bloc">
            		<h4 class="pratique__heading4 heading4" aria-level="4" role="heading">FAQ</h4>
					<div class="pratique__bloc--txt">
                        <?php the_field('faq'); ?>
            		</div>
            	</div>
            </li>
        </ul>
	</section>
<?php get_footer(); ?>