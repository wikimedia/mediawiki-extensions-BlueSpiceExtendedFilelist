<?php

class BlueSpiceExtendedFilelistHooks {

	public static function onSpecialPage_initList( &$aSpecialPages ) {
		global $bsgEFLOverrideStandardFilelist;
		if( $bsgEFLOverrideStandardFilelist ) {
			$aSpecialPages['Listfiles'] = 'SpecialBlueSpiceExtendedFilelist';
		}
		return true;
	}

	/**
	 * Conditionally register modules
	 * @param ResourceLoader $resourceLoader
	 * @return boolean
	 */
	public static function onResourceLoaderRegisterModules( &$resourceLoader ) {
		$extPath = dirname( __DIR__  );
		if( $resourceLoader->isModuleRegistered( 'mmv.bootstrap' ) ) {
			$resourceLoader->register(
				'ext.bluespice.extendedFilelist.plugin.mmv',
				[
					'scripts' => 'bluespice.extendedFilelist.plugin.mmv.js',
					'dependencies' => [
						'mmv.bootstrap'
					],
					'localBasePath' => $extPath. '/resources',
					'remoteExtPath' => 'BlueSpiceExtendedFilelist/resources'
				]
			);
		}
		return true;
	}
}