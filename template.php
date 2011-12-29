<?php

/**
 * Implementation of node preprocess
 */
function yourtheme_preprocess_node(&$vars) {
	// Creating new theme suggestion for node teasers
	$vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__' . $vars['view_mode'];
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