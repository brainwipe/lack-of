<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function lackof_preprocess_node(&$variables) {
	$variables['submitted'] =  t('!username on !datetime', 
		array(
		'!username' => $variables['name'], 
		'!datetime' => $variables['date'],
		));

	drupal_add_js('sites/all/themes/lackof/js/lackof.js', array('scope' => 'header', 'group' => JS_THEME, 'requires_jquery' => true, 'weight' => 20));
}