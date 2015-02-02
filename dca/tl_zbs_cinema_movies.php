<?php


/**
 * Load tl_content language file
 */
System::loadLanguageFile('tl_content');

$GLOBALS['TL_DCA']['tl_zbs_cinema_movies'] = array
(
    // Config
    'config' => array
    (
	'dataContainer'               => 'Table',
	'enableVersioning'            => true,
	'sql' => array
	(
	    'keys' => array
	    (
		'id' => 'primary',
	    )
	)
    ),
    
    // Fields
    'fields' => array
    (
	'id' => array
	(
	    'sql' => "int(10) unsigned NOT NULL auto_increment"
	),
	'pid' => array
	(
	    'sql'                     => "int(10) unsigned NOT NULL default '0'",
	),
	'tstamp' => array
	(
	    'sql'                     => "int(10) unsigned NOT NULL default '0'"
	),
	'headline' => array
	(
	    'label'                   => &$GLOBALS['TL_LANG']['tl_zbs_cinema_movies']['headline'],
	    'exclude'                 => true,
	    'search'                  => true,
	    'sorting'                 => true,
	    'flag'                    => 1,
	    'inputType'               => 'text',
	    'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
	    'sql'                     => "varchar(255) NOT NULL default ''"
	),
    )
);
