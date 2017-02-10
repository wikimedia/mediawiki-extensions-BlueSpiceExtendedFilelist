<?php

$wgExtensionCredits['other'][] = array(
	'name' => 'BlueSpiceExtendedFilelist',
	'author' => array( 'Dejan Savuljesku' ),
	'descriptionmsg' => 'bs-extendedfilelist-desc',
	'version' => '1.23'
);

$wgMessagesDirs['BlueSpiceExtendedFilelist'] = __DIR__ .'/i18n';
$wgExtensionMessagesFiles['BlueSpiceExtendedFilelistAlias'] = __DIR__ .'/BlueSpiceExtendedFilelist.alias.php';
$wgAutoloadClasses['SpecialBlueSpiceExtendedFilelist'] =  __DIR__.'/includes/specials/SpecialBlueSpiceExtendedFilelist.php';
$wgAutoloadClasses['BlueSpiceExtendedFilelistHooks'] =  __DIR__.'/includes/BlueSpiceExtendedFilelistHooks.php';
$wgSpecialPages['BlueSpiceExtendedFilelist'] = 'SpecialBlueSpiceExtendedFilelist';
$wgHooks['BSUserSidebarGlobalActionsWidgetGlobalActions'][] = 'BlueSpiceExtendedFilelistHooks::onBSUserSidebarGlobalActionsWidgetGlobalActions';
$wgHooks['SpecialPage_initList'][] = 'BlueSpiceExtendedFilelistHooks::onSpecialPage_initList';

$wgResourceModules['ext.bluespice.extendedFilelist'] = array(
	'scripts' => array(
		'bluespice.extendedFilelist.js'
	),
	'styles' => array(
		'bluespice.extendedFilelist.css'
	),
	'dependencies' => array(
		'ext.bluespice.extjs',
		'ext.bluespice.upload.REL1_27', //Kollision mit MultiUpload Erweiterung
		'ext.bluespice.extjs.filerepo'
	),
	'localBasePath' => $IP.'/extensions/BlueSpiceExtendedFilelist/resources',
	'remoteExtPath' => 'BlueSpiceExtendedFilelist/resources'
);

$bsgEFLOverrideStandardFilelist = false;

require_once __DIR__ . '/REL1_27Shim.php';
