<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tgm_gce"
 *
 * Auto generated by Extension Builder 2016-11-14
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TgM Google Calendarize Events',
	'description' => 'This extension allows you to create events and gives you the possibility to show the created events on google map.',
	'category' => 'plugin',
	'author' => 'Oliver Pfaff',
	'author_email' => 'op@teamgeist-medien.de',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.0.4',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
            'calendarize' =>'2.6.0-3.99.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);