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
}