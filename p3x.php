<?php
/*
Plugin Name: p3x realisation web
Plugin URI: https://www.p3x.fr/realisations
Description: Affichez les dernières réalisations Web sur votre site Internet (Sites Internet, templates, supports imprimés, identités visuelles, logos).
Author: p3x
Version: 1.0
Author URI: https://www.p3x.fr
*/

add_shortcode('p3x_realisation', 'p3x_realisation');

function p3x_formation()
{
	$html = '<h2>Réalisations p3x</h2>
			<ul>';
	
	$xmlfile = 'https://www.p3x.fr/realisation.xml';
	$xml = simplexml_load_file($xmlfile);
	
	foreach($xml->channel->item as $item)
	{
		$html .= '<li><a href="'.$item->link.'" target="_blank">'.$item->title.'</a></li>';
	}
	
	$html .= '</ul>';
	
	return $html;
}