<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'HeimrichHannot\PinBoard\ModulePinBoardEditor' => 'system/modules/pinboard/modules/ModulePinBoardEditor.php',
	'HeimrichHannot\PinBoard\ModulePinBoard'       => 'system/modules/pinboard/modules/ModulePinBoard.php',
	'HeimrichHannot\PinBoard\ModulePinBoardReader' => 'system/modules/pinboard/modules/ModulePinBoardReader.php',

	// Classes
	'HeimrichHannot\PinBoard\PinBoard'             => 'system/modules/pinboard/classes/PinBoard.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_pinboard'                    => 'system/modules/pinboard/templates',
	'frontendedit_list_item_pinboard' => 'system/modules/pinboard/templates',
	'j_pinboard'                      => 'system/modules/pinboard/templates',
	'formhybrid_reader_pinboard'      => 'system/modules/pinboard/templates',
));
