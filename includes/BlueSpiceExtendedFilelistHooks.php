<?php

class BlueSpiceExtendedFilelistHooks {

	/**
	 * Adds link to "global actions"
	 * @param UserSidebar $oSender
	 * @param User $oUser
	 * @param array $aLinks
	 * @param string $sWidgetTitle
	 * @return boolean always true ti keep hook running
	 */
	public static function onBSUserSidebarGlobalActionsWidgetGlobalActions( $oSender, $oUser, &$aLinks, &$sWidgetTitle ) {
		global $bsgEFLOverrideStandardFilelist;

		if( $bsgEFLOverrideStandardFilelist ) {
			return true;
		}

		$oSpecialExtendedFilelist = SpecialPageFactory::getPage( 'BlueSpiceExtendedFilelist' );
		$aLinks[] = array(
			'target' => $oSpecialExtendedFilelist->getPageTitle(),
			'text' => $oSpecialExtendedFilelist->getDescription(),
			'attr' => array(),
			'position' => 220,
			'permissions' => array(
				'read'
			),
		);
		return true;
	}

	public static function onSpecialPage_initList( &$aSpecialPages ) {
		global $bsgEFLOverrideStandardFilelist;
		if( $bsgEFLOverrideStandardFilelist ) {
			$aSpecialPages['Listfiles'] = 'SpecialBlueSpiceExtendedFilelist';
		}
		return true;
	}
}