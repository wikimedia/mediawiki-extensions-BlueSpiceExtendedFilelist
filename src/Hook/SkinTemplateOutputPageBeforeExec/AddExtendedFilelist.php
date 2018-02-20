<?php

namespace BlueSpice\ExtendedFilelist\Hook\SkinTemplateOutputPageBeforeExec;

use BlueSpice\Hook\SkinTemplateOutputPageBeforeExec;
use BlueSpice\SkinData;

class AddExtendedFilelist extends SkinTemplateOutputPageBeforeExec {
	protected function doProcess() {
		global $bsgEFLOverrideStandardFilelist;

		if( $bsgEFLOverrideStandardFilelist ) {
			return true;
		}

		$oSpecialExtendedFilelist = \SpecialPageFactory::getPage( 'BlueSpiceExtendedFilelist' );

		$this->mergeSkinDataArray(
			SkinData::GLOBAL_ACTIONS,
			[
				'bs-extended-filelist' => [
					'href' => $oSpecialExtendedFilelist->getPageTitle()->getFullURL(),
					'text' => $oSpecialExtendedFilelist->getDescription(),
					'title' => $oSpecialExtendedFilelist->getPageTitle(),
					'classes' => ' icon-file-text ',
					'data-permissions' => 'read'
				]
			]
		);

		return true;
	}
}