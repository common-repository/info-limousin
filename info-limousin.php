<?php
/*
Plugin Name: Info Limousin
Plugin URI: http://www.asso.info-limousin.com/
Description: L’association Info Limousin relaie sur Internet (moteurs de recherche, agendas, flux RSS thématiques, portails thématiques et géographiques, plate-formes sous Androïd...) les informations annonçant des événements sur toute la région Limousin. >> Pour afficher l'agenda tapez simplement " [info-lim] "
Version: 0.1
Author: Jules
Author URI: http://www.radio87.fr/
License: GPL2
*/

function infolimagenda() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=3427" name="info-limousin-agenda" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim', 'infolimagenda' );


function infolimagenda2() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=31262" name="info-limousin-agenda2" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-19', 'infolimagenda2' );


function infolimagenda3() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=1200" name="info-limousin-agenda3" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-23', 'infolimagenda3' );


function infolimagenda4() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=81657" name="info-limousin-agenda4" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-87', 'infolimagenda4' );


function infolimagenda5() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=5746" name="info-limousin-agenda5" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-expo', 'infolimagenda5' );


function infolimagenda6() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=43352" name="info-limousin-agenda6" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-fete', 'infolimagenda6' );


function infolimagenda7() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=49830" name="info-limousin-agenda7" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-form', 'infolimagenda7' );


function infolimagenda8() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=3937" name="info-limousin-agenda8" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-jeu', 'infolimagenda8' );


function infolimagenda9() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=47283" name="info-limousin-agenda9" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-march', 'infolimagenda9' );


function infolimagenda10() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=23066" name="info-limousin-agenda10" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-natur', 'infolimagenda10' );


function infolimagenda11() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=21002" name="info-limousin-agenda11" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-spect', 'infolimagenda11' );


function infolimagenda12() {
return '<iframe src="http://info-limousin.com/index.php?tp=1&amp;c=5626" name="info-limousin-agenda12" style="width:100%;height:640px;border:none;" scrolling="auto" frameborder="0"></iframe>';
}
add_shortcode( 'info-lim-sport', 'infolimagenda12' );

?>
