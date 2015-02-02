<?php


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'ByteSolution',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ByteSolution\ModuleMovieList'  => 'system/modules/zbs_cinema/modules/ModuleMovieList.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_movielist'    => 'system/modules/zbs_cinema/templates/modules'
));
