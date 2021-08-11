<?php

namespace BlueSpice\ExtendedFilelist\HookHandler;

use BlueSpice\ExtendedFilelist\GlobalActionsTool;
use MWStake\MediaWiki\Component\CommonUserInterface\Hook\MWStakeCommonUIRegisterSkinSlotComponents;

class Main implements MWStakeCommonUIRegisterSkinSlotComponents {

	/**
	 * @inheritDoc
	 */
	public function onMWStakeCommonUIRegisterSkinSlotComponents( $registry ): void {
		$registry->register(
			'GlobalActionsTools',
			[
				'special-bluespice-extendedfilelist' => [
					'factory' => function () {
						return new GlobalActionsTool();
					}
				]
			]
		);
	}
}
