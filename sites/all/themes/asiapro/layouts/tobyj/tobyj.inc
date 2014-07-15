<?php
// Plugin definition
$plugin = array(
  'title' => t('tobyj'),
  'icon' => 'tobyj.png',
  'category' => t('Responsive'),
  'theme' => 'tobyj',
  'css' => 'tobyj.css',
  'regions' => array(
    'column1' => t('First Column'),
	'column2_top' => t('Above Content Col'),
	'column2' => t('CONTENT Column'),
	'column2_btm' => t('Below Content Col'),
	'column3' => t('Third Column'),
	'column4' => t('Fourth Column'),
  ),
);