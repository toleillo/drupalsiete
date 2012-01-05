<?php

/**
 * Implementation hook_preprocess_views_view()
 */
function drupalsiete_preprocess_views_view(&$variables) {
	// Rewriting views classes array
	$variables['classes_array'] = array();
	$variables['classes_array'] = array(
		'view',
		'view-' . drupal_clean_css_identifier($variables['view']->name),
		'view-dom-id-' . $variables['dom_id'],
		'clearfix'
	);
	
	// Creating a human-readable id for the view with view name and display name
	$variables['view_name'] = drupal_clean_css_identifier($variables['view']->name) . '-' . drupal_clean_css_identifier($variables['view']->current_display);
}