<?php
/*
Plugin Name:  Simplon Plugin
Plugin URI:   https://github.com/didiergenrelp2/partenariat-simplon.git
Description:  Ajout texte partenariat
Version:      1.0
Author:       DGLP2
Author URI:   https://github.com/didiergenrelp2/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Domain Path:  /languages
*/

function SimplonShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire https://simplon.co/ - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'SimplonShortcode');