<?php

class SpecialBlueSpiceExtendedFilelist extends BsSpecialPage {
	public function __construct(){
		parent::__construct( 'BlueSpiceExtendedFilelist' );
	}

	public function execute( $par ){
		global $bsgEFLPluginModules;

		parent::execute( $par );

		$output = $this->getOutput();
		$output->addModules( 'ext.bluespice.extendedFilelist' );
		$output->addModuleStyles( 'ext.bluespice.extendedFilelist.styles' );
		$output->addHTML ( '<div id="bs-extendedfilelist-grid"></div>');
		$this->loadPluginModules( $output, $bsgEFLPluginModules );
	}

	private static function loadPluginModules( $output, $aPluginModules ) {
		foreach( $aPluginModules as $pluginModule ){
			$output->addModules( $pluginModule );
		}
	}
}