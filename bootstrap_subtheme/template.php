<?php
/**
 *
 */
//ajout d'une classe 'img-responsive' à toutes les images du site
function bootstrap_subtheme_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive'; // http://getbootstrap.com/css/#overview-responsive-images
}

//suppression du lien 'read more' pour les teaser de bd et remplacement par un nouveau lien de redirection vers la page club_modal
// Preprocess variables for node.tpl.php.
function bootstrap_subtheme_preprocess_node(&$variables) {
	$node = $variables['node'];
	if ($node->type == 'bd') {
		// Let's get that read more link out of the generated links variable!
		unset($variables['content']['links']['node']['#links']['node-readmore']);

		// Now let's put it back as it's own variable! So it's actually versatile!
		$variables['newreadmore'] = t('<span class="newreadmore"> <a href="/club">test Read More</a> </span>',
			array(
			'!title' => $variables['node_url'],
			)
		);
	}
}
?>
