<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 2, array
(
	'tl_zbs_cinema_movies' => array
	(
		'tables' => array('tl_zbs_cinema_movies'),
		'icon'   => 'system/modules/faq/assets/icon.gif'
	)
));

/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'cinema' => array
	(
		'movielist'    => 'ModuleMovieList'
	)
));


/**
 * Cron jobs
 */


/**
 * Register hook to add news items to the indexer
 */


/**
 * Add permissions
 */
