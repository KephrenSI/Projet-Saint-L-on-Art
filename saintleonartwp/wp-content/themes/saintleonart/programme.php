
		<nav class="sec-nav">
			<h2 class="header__heading2 hidden" aria-level="2" role="heading">Secondary nav</h2>
			<ul class="sec-nav__list">
				<li class="sec-nav__list--elt">
					<a href="./programme.html" class="sec-nav__list--txt active">Programme</a>
					<span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
							<title>map</title>
							<path d="M0 6l10-4v24l-10 4z"></path>
							<path d="M12 1l10 6v23l-10-5z"></path>
							<path d="M24 7l8-6v24l-8 6z"></path>
						</svg>
					</span>
				</li>
				<li class="sec-nav__list--elt">
					<span class="sec-nav__list--space">&nbsp;|&nbsp;</span>
				</li>
				<li class="sec-nav__list--elt">
					<span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
							<title>alarm</title>
							<path d="M16 4c-7.732 0-14 6.268-14 14s6.268 14 14 14 14-6.268 14-14-6.268-14-14-14zM16 29.25c-6.213 0-11.25-5.037-11.25-11.25s5.037-11.25 11.25-11.25c6.213 0 11.25 5.037 11.25 11.25s-5.037 11.25-11.25 11.25zM29.212 8.974c0.501-0.877 0.788-1.892 0.788-2.974 0-3.314-2.686-6-6-6-1.932 0-3.65 0.913-4.747 2.331 4.121 0.851 7.663 3.287 9.96 6.643v0zM12.748 2.331c-1.097-1.418-2.816-2.331-4.748-2.331-3.314 0-6 2.686-6 6 0 1.082 0.287 2.098 0.788 2.974 2.297-3.356 5.838-5.792 9.96-6.643z"></path>
							<path d="M16 18v-8h-2v10h8v-2z"></path>
						</svg>
					</span>
					<a href="./agenda.html" class="sec-nav__list--txt">Agenda</a>
				</li>
			</ul>
		</nav>
		<section class="title">
			<h2 class="title__heading2 heading2" aria-level="2" role="heading">Programme</h2>	
		</section>
		<section class="programme">
			<h2 class="title__heading2 heading2 hidden" aria-level="2" role="heading">Programme</h2>
			<section class="carte">
				<h3 class="title__heading3 heading3 hidden" aria-level="3" role="heading">Carte</h3>
				<div id="map"></div>
				<script>
					function initMap() {
						var center = {lat: 50.648376, lng: 5.5855541},
							nom1 = {lat: 50.6479241, lng: 5.5884746},
							nom2 = {lat: 50.6477818, lng: 5.5844575};
						var map = new google.maps.Map(document.getElementById('map'), {
						  zoom: 15,
						  center: center
						});
						var marker = new google.maps.Marker({
						  position: nom1,
						  map: map
						});
						var marker = new google.maps.Marker({
						  position: nom2,
						  map: map
						});
					}
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt4Q4g4WKG8mCQyweq5JgWU1Kja4sZp7Q&callback=initMap">
				</script>
			</section>
			<section class="programmation">
				<h3 class="title__heading3 heading3 hidden" aria-level="3" role="heading">Programmation</h3>
				<div class="programmation__filter">
					filtrer par type
					<span>
	                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
						<title>cog</title>
						<path d="M29.181 19.070c-1.679-2.908-0.669-6.634 2.255-8.328l-3.145-5.447c-0.898 0.527-1.943 0.829-3.058 0.829-3.361 0-6.085-2.742-6.085-6.125h-6.289c0.008 1.044-0.252 2.103-0.811 3.070-1.679 2.908-5.411 3.897-8.339 2.211l-3.144 5.447c0.905 0.515 1.689 1.268 2.246 2.234 1.676 2.903 0.672 6.623-2.241 8.319l3.145 5.447c0.895-0.522 1.935-0.82 3.044-0.82 3.35 0 6.067 2.725 6.084 6.092h6.289c-0.003-1.034 0.259-2.080 0.811-3.038 1.676-2.903 5.399-3.894 8.325-2.219l3.145-5.447c-0.899-0.515-1.678-1.266-2.232-2.226zM16 22.479c-3.578 0-6.479-2.901-6.479-6.479s2.901-6.479 6.479-6.479c3.578 0 6.479 2.901 6.479 6.479s-2.901 6.479-6.479 6.479z"></path>
						</svg>
	                </span>
				</div>
				<div class="programmation__bloc">
					<div class="programmation__bloc--event">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
					<div class="programmation__bloc--event">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
					<div class="programmation__bloc--event">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
				<!-- <div class="last-event__cta cta">
					<a href="#" title="Aller vers la page à propos" >Évènements</a>
				</div>
				<div class="last-event__cta cta">
					<a href="#" title="Aller vers la page à propos" >Artistes</a>
				</div> -->
				<div class="last-event__cta cta">
	                <span class="cta__masque">Tous les évènements</span>
	                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les évènements</a>
	            </div>
	            <div class="last-event__cta cta">
	                <span class="cta__masque">Tous les artistes</span>
	                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les artistes</a>
	            </div>
			</section>
		</section>
		<section class="artistes">
			<h2  class="artistes__heading2 heading2" aria-level="2" role="heading">Artistes</h2>
			<div class="artistes__random">
				mélanger
				<span>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                    <title>shuffle</title>
                    <path d="M24 22h-3.172l-5-5 5-5h3.172v5l7-7-7-7v5h-4c-0.53 0-1.039 0.211-1.414 0.586l-5.586 5.586-5.586-5.586c-0.375-0.375-0.884-0.586-1.414-0.586h-6v4h5.172l5 5-5 5h-5.172v4h6c0.53 0 1.039-0.211 1.414-0.586l5.586-5.586 5.586 5.586c0.375 0.375 0.884 0.586 1.414 0.586h4v5l7-7-7-7v5z"></path>
                    </svg>
                </span>
			</div>
			<div class="artistes__artiste">
				<a class="artistes__artiste--bloc" href="#" title="Aller vers la page de l'artiste">&nbsp;</a>
				<img class="artistes__artiste--img" src="../img/artiste.jpg" alt="">
				<div class="artistes__artiste--taxonomy">
					photo
				</div>
				<h3  class="artistes__heading3 heading3" aria-level="3" role="heading">Artiste name</h3>
				<div class="artistes__artiste--social">
					<p class="artistes__artiste--txt">Suivre</p>
					<div class="artistes__artiste--reseaux">
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Facebook">Facebook</a>
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Twitter">Twitter</a>
					</div>
				</div>
			</div>
			<div class="artistes__artiste">
				<a class="artistes__artiste--bloc" href="#" title="Aller vers la page de l'artiste">&nbsp;</a>
				<img class="artistes__artiste--img" src="../img/artiste.jpg" alt="">
				<div class="artistes__artiste--taxonomy">
					photo
				</div>
				<h3  class="artistes__heading3 heading3" aria-level="3" role="heading">Artiste name</h3>
				<div class="artistes__artiste--social">
					<p class="artistes__artiste--txt">Suivre</p>
					<div class="artistes__artiste--reseaux">
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Facebook">Facebook</a>
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Twitter">Twitter</a>
					</div>
				</div>
			</div>
			<div class="artistes__artiste">
				<a class="artistes__artiste--bloc" href="#" title="Aller vers la page de l'artiste">&nbsp;</a>
				<img class="artistes__artiste--img" src="../img/artiste.jpg" alt="">
				<div class="artistes__artiste--taxonomy">
					photo
				</div>
				<h3  class="artistes__heading3 heading3" aria-level="3" role="heading">Artiste name</h3>
				<div class="artistes__artiste--social">
					<p class="artistes__artiste--txt">Suivre</p>
					<div class="artistes__artiste--reseaux">
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Facebook">Facebook</a>
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Twitter">Twitter</a>
					</div>
				</div>
			</div>
			<div class="artistes__artiste">
				<a class="artistes__artiste--bloc" href="#" title="Aller vers la page de l'artiste">&nbsp;</a>
				<img class="artistes__artiste--img" src="../img/artiste.jpg" alt="">
				<div class="artistes__artiste--taxonomy">
					photo
				</div>
				<h3  class="artistes__heading3 heading3" aria-level="3" role="heading">Artiste name</h3>
				<div class="artistes__artiste--social">
					<p class="artistes__artiste--txt">Suivre</p>
					<div class="artistes__artiste--reseaux">
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Facebook">Facebook</a>
						<a class="artistes__artiste--link" href="#" title="Aller vers la page Twitter">Twitter</a>
					</div>
				</div>
			</div>
			<!-- <div class="artistes__cta cta">
				<a href="#" title="Aller vers la page à propos" >Tous les voir</a>
			</div> -->
			<div class="programmation__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
            </div>
		</section>
