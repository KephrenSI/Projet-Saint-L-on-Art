<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tu aime l'art ? Tu aime le folclore à la liégeoise ? Tu ne sais pas quoi faire de tes week end ? Ne cherche plus, l'Encreuse t'organise un festival le 15 et 16 septembre 2018 de quoi te dégourdir les jambres un week end. Viens découvrir de nombreux artistes de ta région parfois méconnu ou non ! À travers les rues du quartier Saint Léonard nous t'invitons à venir découvrir de nombreuses oeuvres d'artistes !  N'oublie pas d'inviter tes potes !">
    <meta name="author" content="Lencreuse">
    <meta name="copyright" content="Copyright Lencreuse - All rights Reserved.">
    <meta name="designer" content="Képhren SIMONIS">
    <meta name="publisher" content="Lencreuse | Képhren SIMONIS">
    <link rel="stylesheet" type="text/css" href="<?php dw_asset('css/styles.css'); ?>">
    <link rel="icon" href="<?php dw_asset('img/logo.ico'); ?>" />
</head>
<body>
    <h1  class="body__heading1 heading1 hidden" aria-level="1" role="heading"><?php bloginfo('name'); ?></h1>
    <header class="header">
        <h2  class="header__heading2 heading2 hidden" aria-level="2" role="heading">Header</h2>
        <nav class="main-nav">
            <h3 class="main-nav__heading3 heading3 hidden" aria-level="3" role="heading">Navigation principale</h3>

            <input class="burger-check" id="burger-check" type="checkbox">
            <label for="burger-check" class="burger"><span class="hidden">&nbsp;</span></label>

            <div class="nav">
                <a class="logo-txt" href="#" title="Recharger la page d'accueil">
                    <span class="hidden">&nbsp;</span>
                    <svg class="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -30 150 120">
                        <title>saint_leonart_logo</title><path class="cls-1" d="M42,45.15a6.54,6.54,0,0,1,2.69,5.23q0,3.77-3.82,6.07a13.88,13.88,0,0,1-7.29,2,14.63,14.63,0,0,1-5.39-1,9.67,9.67,0,0,1-4.36-3.21.67.67,0,0,1-.09-.75,1.27,1.27,0,0,1,.54-.5l6-2.83a2.1,2.1,0,0,1,1.52.16,5.88,5.88,0,0,0,1.76.49,4.2,4.2,0,0,0,1.57-.3q1-.4,1-1.1,0-1.36-2.53-1.33a15.2,15.2,0,0,1-3.05-.26,11.06,11.06,0,0,1-5.37-2.65A7,7,0,0,1,26.2,33.48a13.26,13.26,0,0,1,7.35-2.09,14,14,0,0,1,6,1.29,8.82,8.82,0,0,1,4.42,4.08,1.2,1.2,0,0,1,.14.52c0,.37-.26.62-.79.75L37,40.35q-.7.26-.94.07L35.49,40a3.33,3.33,0,0,0-2-.5,4.16,4.16,0,0,0-1.55.3q-1,.4-1,1.08T32,42a4,4,0,0,0,1.55.3,14.82,14.82,0,0,1,4.43.84A12.36,12.36,0,0,1,42,45.15Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M58.6,32.57,71.15,57.42a1,1,0,0,1,.12.42c0,.4-.41.59-1.24.59H64.62a3.75,3.75,0,0,1-1.19-.11,2.17,2.17,0,0,1-.72-.9,2,2,0,0,0-1.94-1.08q-2.48,0-4.4,0H52a1.69,1.69,0,0,0-1.67,1,2.26,2.26,0,0,1-.63.94,2.94,2.94,0,0,1-1.19.15l-2.77,0-2.76,0c-.84,0-1.26-.2-1.26-.61a1.12,1.12,0,0,1,.14-.49L54.36,32.57a2.34,2.34,0,0,1,4.24,0Zm-.84,15.25L56.84,46a.53.53,0,0,0-.37-.21.48.48,0,0,0-.37.23q-.35.64-1,1.9c-.14.33,0,.51.28.56h2.13a.23.23,0,0,0,.26-.26A.61.61,0,0,0,57.77,47.82Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M77.59,31.42a.76.76,0,0,1,.85.86v25.3a.76.76,0,0,1-.85.85H70.72a.76.76,0,0,1-.86-.85V32.27a.76.76,0,0,1,.86-.86Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M100.1,31.4a.76.76,0,0,1,.86.86V57.82c0,.5-.16.75-.49.75a.83.83,0,0,1-.23,0,3.74,3.74,0,0,1-1-.4L90,52.23c-.31-.2-.47-.14-.47.17q0,1.52,0,2.5V57.4c0,.68-.35,1-1,1H81.79a.76.76,0,0,1-.87-.85V32.12q0-.82.66-.72a2.59,2.59,0,0,1,.91.28l9,6.11A1,1,0,0,0,92,38c.23,0,.35-.21.35-.63V32.26c0-.59.34-.88,1-.86q1.88,0,3.38,0Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M103.34,31.45H124q1,0,1,.8v6.44c0,.53-.35.8-1,.8h-5.28c-.5,0-.75.28-.75.84V57.57a.76.76,0,0,1-.86.85h-6.87a.76.76,0,0,1-.86-.85V40.33c0-.56-.24-.84-.73-.84h-5.31c-.7,0-1-.27-1-.8V32.26Q102.29,31.45,103.34,31.45Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M32.1,58.22a.76.76,0,0,1,.86.86V75.75q0,.89.82.89h7.12a.76.76,0,0,1,.85.85v6.88a.76.76,0,0,1-.85.86H25.24a.76.76,0,0,1-.87-.86V59.07a.76.76,0,0,1,.87-.86Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M41.82,58.22l18.48,0c.64,0,1,.27,1,.82v6.42q0,.8-1,.8H50.49c-.66,0-1,.31-.94.94s.35.94.94.94h8.82c.6,0,.9.25.9.75v5.93c0,.49-.3.73-.91.73H50.37q-.82,0-.82,1t.82.94H60.3q1,0,1,.77v6.11q0,.77-1,.77-3.09,0-9.25.05t-9.23.05a.76.76,0,0,1-.85-.86V59.07A.76.76,0,0,1,41.82,58.22Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M75.14,57.28A14.35,14.35,0,0,1,89.51,71.65,14.33,14.33,0,0,1,75.14,86,14.3,14.3,0,0,1,60.76,71.65,14.33,14.33,0,0,1,75.14,57.28Zm0,8.69a5.69,5.69,0,1,0,4,1.67A5.48,5.48,0,0,0,75.14,66Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M108.69,58.2a.76.76,0,0,1,.85.85V84.62c0,.5-.16.75-.49.75a.81.81,0,0,1-.23,0,3.63,3.63,0,0,1-1-.4L98.64,79c-.31-.2-.47-.14-.47.18q0,1.52,0,2.49v2.5a.91.91,0,0,1-1,1H90.39a.76.76,0,0,1-.87-.85V58.92c0-.55.22-.78.66-.71a2.66,2.66,0,0,1,.91.28l9,6.11a1,1,0,0,0,.52.23c.23,0,.35-.21.35-.63V59.06c0-.59.34-.88,1-.85q1.88,0,3.38,0Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M124.34,58.19c.51,0,.74.22.68.68l-1,6.43c-.07.5-.3.76-.68.76h-2.83a.79.79,0,0,1-.93-.56.17.17,0,0,1,0-.08,3.57,3.57,0,0,1,.54-.8c.18-.23.07-.34-.3-.34h-.94a.6.6,0,0,1-.68-.69V58.86a.6.6,0,0,1,.68-.68Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M39.31,86.17,51.85,111a1,1,0,0,1,.12.42q0,.59-1.24.59H45.33a3.81,3.81,0,0,1-1.19-.11,2.17,2.17,0,0,1-.72-.9,2,2,0,0,0-1.94-1.08q-2.48,0-4.4,0H32.73a1.69,1.69,0,0,0-1.67,1,2.23,2.23,0,0,1-.63.93,2.94,2.94,0,0,1-1.19.15l-2.77,0-2.76,0q-1.26,0-1.26-.61a1.13,1.13,0,0,1,.14-.49L35.07,86.17a2.34,2.34,0,0,1,4.24,0Zm-.84,15.25-.92-1.87a.53.53,0,0,0-.37-.21.48.48,0,0,0-.37.23c-.23.43-.55,1.06-1,1.9-.14.33,0,.51.28.56h2.13a.23.23,0,0,0,.26-.26A.61.61,0,0,0,38.47,101.42Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M58.6,105.54a.7.7,0,0,0-.52-.33c-.21,0-.33.14-.37.51v5.46a.76.76,0,0,1-.86.86H50a.76.76,0,0,1-.85-.86V85.87c0-.57.27-.86.8-.86L61.38,85a10,10,0,0,1,6.25,2A9.08,9.08,0,0,1,71,92.45a10.71,10.71,0,0,1,.23,2.18,10.82,10.82,0,0,1-.73,3.86,8.31,8.31,0,0,1-4,4.59.67.67,0,0,0-.44.58,1.14,1.14,0,0,0,.31.68l4.48,6.84a1.07,1.07,0,0,1,.23.54c0,.21-.17.31-.52.31H63.72a1.64,1.64,0,0,1-1.41-.86Zm.24-12.44h-.23a.74.74,0,0,0-.86.8v2.22q0,.85.75.82l.33,0A13.51,13.51,0,0,0,62,96.5a1.52,1.52,0,0,0,1.06-1.57A1.49,1.49,0,0,0,62,93.38,11.79,11.79,0,0,0,58.85,93.1Z" transform="translate(-22.45 -31.23)"/><path class="cls-1" d="M70.06,85.05H88.47q1,0,1,.8v6.44c0,.54-.35.8-1,.8H84.31q-.75,0-.75.84v17.24a.76.76,0,0,1-.86.86H75.83a.76.76,0,0,1-.86-.86V93.93c0-.56-.25-.84-.73-.84H70.06c-.7,0-1-.27-1-.8V85.86Q69,85.05,70.06,85.05Z" transform="translate(-22.45 -31.23)"/>
                    </svg>
                </a>
                <ul class="main-nav__list">
                    <?php foreach (dw_get_nav_items('header') as $item): ?>
                        <li class="main-nav__list--elt">
                            <?php if(!$item->children): ?>
                            <a href="<?php echo $item->link; ?>" title="Aller vers la page page <?php echo $sub->label; ?>" class="main-nav__list--link <?php echo $item -> isCurrent ? ' active' : ''; ?>"><?php echo $item->label; ?></a>
                            <?php else: ?>
                            <span class="main-nav__list--submenu submenu"><?php echo $item->label; ?></span>
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
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">