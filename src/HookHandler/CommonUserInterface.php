<?php

namespace BlueSpice\ExtendedFilelist\HookHandler;

use BlueSpice\ExtendedFilelist\GlobalActionsOverview;
use MWStake\MediaWiki\Component\CommonUserInterface\Hook\MWStakeCommonUIRegisterSkinSlotComponents;

class CommonUserInterface implements MWStakeCommonUIRegisterSkinSlotComponents {

	/**
	 * @inheritDoc
	 */
	public function onMWStakeCommonUIRegisterSkinSlotComponents( $registry ): void {
		$registry->register(
			'GlobalActionsOverview',
			[
				'special-bluespice-extendedfilelist' => [
					'factory' => static function () {
						return new GlobalActionsOverview();
					}
				]
			]
		);
	}
}
