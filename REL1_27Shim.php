<?php

/**
 * Dies enthält alles was in BSF REL1_23 ggü. REL1_27 fehlt
 */

array_unshift(
	$wgResourceModules['ext.bluespice.extendedFilelist']['scripts'],
	'bluespice.extendedFilelist.REL1_27Shim.js'
);

$wgResourceModules['ext.bluespice.extendedFilelist']['styles'][] = 'bluespice.extendedFilelist.REL1_27Shim.css';
$wgResourceModules['ext.bluespice.extendedFilelist']['styles'][] = 'bluespice.extjs.filerepogrid.css';

$wgMessagesDirs['BSF_FileRepo'] = __DIR__ .'/i18n/filerepo';
$wgMessagesDirs['BSF_Upload'] = __DIR__ .'/i18n/upload';

$wgAutoloadClasses['BSApiFileBackendStore'] = __DIR__."/includes/api/BSApiFileBackendStore.php";

$aResourceModuleTemplate = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'BlueSpiceExtendedFilelist/resources',
	'targets' => array( 'mobile', 'desktop' )
);

$wgResourceModules['ext.bluespice.upload.REL1_27'] = array(
	'messages' => array(
		'bs-upload-uploaddialogtitle',
		'bs-upload-uploadbuttontext',
		'bs-upload-uploadfilefieldlabel',
		'bs-upload-uploadfileemptytext',
		'bs-upload-uploaddestfilelabel',
		'bs-upload-allowedfiletypesare',
		'bs-upload-license',
		'bs-upload-uploadwatchthislabel',
		'bs-upload-uploadignorewarningslabel',
		'bs-upload-categories',
		'bs-upload-upload-waitmessage',
		'bs-upload-error',
		'bs-upload-descfilelabel',
		'bs-upload-error-long',
		'bs-upload-filetypenotsupported',
		'bs-upload-details'
	)
) + $aResourceModuleTemplate;

$wgResourceModules['ext.bluespice.extjs.filerepo'] = array(
	'messages' => array(
		'bs-filerepo-labelupload',
		'bs-filerepo-labelfilter',
		'bs-filerepo-headerfilename',
		'bs-filerepo-headerfilesize',
		'bs-filerepo-headerpagecategories',
		'bs-filerepo-headerfilewidth',
		'bs-filerepo-headerfileheight',
		'bs-filerepo-headerfilemimetype',
		'bs-filerepo-headerfileusertext',
		'bs-filerepo-headerfileextension',
		'bs-filerepo-headerfiletimestamp',
		'bs-filerepo-headerfilemediatype',
		'bs-filerepo-headerfiledescription',
		'bs-filerepo-headerfilethumbnail',
		'bs-filerepo-yes',
		'bs-filerepo-no',
		'bs-filerepo-pagesize'
	)
) + $aResourceModuleTemplate;

unset( $aResourceModuleTemplate );