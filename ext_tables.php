<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}



if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'translation',	// Submodule key
		'',						// Position
		array(
			'Index'   => 'index,selectGlobalOrLocalExtensions,extensionFiles,fileSelection,languageSelection,saveTranslation,help',
			'Convert' => 'index',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_xlifftranslationtool.xml',
		)
	);

}


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'XLIFF Translation Tool');


/**
 * register extDirect components
 */
/*
t3lib_extMgm::registerExtDirectComponent(
	'TYPO3.Xlifftranslationtool.ExtDirect',
	t3lib_extMgm::extPath($_EXTKEY) . 'Classes/ExtDirect/Backend/Connector.php:Tx_XliffTranslationtool_ExtDirect_Backend_Connector',
	'tools_XliffTranslationtoolTranslation',
	'user,group'
);
*/

?>