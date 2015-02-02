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
    ),
    'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 0,
			'fields'                  => array('headline'),
			'panelLayout'             => 'filter;sort,search,limit',
		),
		'label' => array
		(
			'fields'                  => array('headline'),
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_news']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_news']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_news']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			
		)
	),
	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},headline'
	),
);
