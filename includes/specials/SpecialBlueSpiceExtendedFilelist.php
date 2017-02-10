<?php

class SpecialBlueSpiceExtendedFilelist extends BsSpecialPage {
	public function __construct(){
		parent::__construct( 'BlueSpiceExtendedFilelist' );
	}

	public function execute( $par ){
		parent::execute( $par );

		$output = $this->getOutput();
		$output->addModules( 'ext.bluespice.extendedFilelist');
		$output->addHTML ( '<div id="bs-extendedfilelist-grid"></div>');
	}
}