<?php

/**
 * Implementation of node preprocess
 */
function yourtheme_preprocess_node(&$variables) {
	// Creating new theme suggestion for node teasers (for example: node--nodetype--teaser.tpl.php)
	$variables['theme_hook_suggestions'][] = 'node__' . $variables['node']->type . '__' . $variables['view_mode'];
		
	// Rewriting node classes array
	$variables['classes_array'] = array();
	$variables['classes_array'] = array(
		'node',
		'node-' . $variables['node']->type,
		'node-' . $variables['node']->type . '-' . $variables['view_mode'],
		'clearfix'
	);
}

/**
 * Implementation of theme('form')
 */
function yourtheme_form($variables) {
  $element = $variables['element'];
  if (isset($element['#action'])) {
    $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
  }
  element_set_attributes($element, array('method', 'id'));
  if (empty($element['#attributes']['accept-charset'])) {
    $element['#attributes']['accept-charset'] = "UTF-8";
  }
  // Removing anonymous and useless <div> wrapping inside forms
  return '<form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form>';
}

/**
 * Implementation hook_preprocess_views_view()
 */
function yourtheme_preprocess_views_view(&$variables) {
	// Rewriting views classes array
	$variables['classes_array'] = array();
	$variables['classes_array'] = array(
		'view',
		'view-' . $variables['view']->name,
		'clearfix'
	);
	
	// Creating a human-readable id for the view with view name and display name
	$variables['view_name'] = $variables['view']->name . '-' . $variables['view']->current_display;
}