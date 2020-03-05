<?php

namespace BlueSpice\ExtendedFilelist\Hook\SkinTemplateOutputPageBeforeExec;

use BlueSpice\Hook\SkinTemplateOutputPageBeforeExec;
use BlueSpice\SkinData;

class AddExtendedFilelist extends SkinTemplateOutputPageBeforeExec {
	/**
	 *
	 * @return bool
	 */
	protected function doProcess() {
		if ( $this->getConfig()->get( 'EFLOverrideStandardFilelist' ) ) {
			return true;
		}

		$oSpecialExtendedFilelist = \MediaWiki\MediaWikiServices::getInstance()
			->getSpecialPageFactory()
			->getPage( 'BlueSpiceExtendedFilelist' );

		$this->mergeSkinDataArray(
			SkinData::GLOBAL_ACTIONS,
			[
				'bs-extended-filelist' => [
					'href' => $oSpecialExtendedFilelist->getPageTitle()->getFullURL(),
					'text' => $oSpecialExtendedFilelist->getDescription(),
					'title' => $oSpecialExtendedFilelist->getPageTitle(),
					'iconClass' => ' icon-file-text ',
					'data-permissions' => 'read'
				]
			]
		);

		return true;
	}
}
