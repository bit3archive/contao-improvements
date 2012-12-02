<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Improvements
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Improvements'              => 'system/modules/improvements/Improvements.php',
	'ImprovementsArticleRename' => 'system/modules/improvements/ImprovementsArticleRename.php',
));
