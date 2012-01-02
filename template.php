<?php

/**
 * Implementation of node preprocess
 */
function yourtheme_preprocess_node(&$variables) {
	// Creating new theme suggestion for node teasers
	$variables['theme_hook_suggestions'][] = 'node__' . $variables['node']->type . '__' . $variables['view_mode'];
	
	// Addding a clearfix to the classes array
	$variables['classes_array'][] = 'clearfix';
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
	// Adding a clearfix to the classes array
	$variables['classes_array'][] = 'clearfix';
	
	// Adding a better name to use as the view id
	$variables['view_name'] = $variables['view']->name . '-' . $variables['view']->current_display;
}