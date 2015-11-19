<?php

class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ideal-simulator-ideal-basic';
		$this->name     = 'iDEAL Simulator - iDEAL Lite / Basic';
		$this->provider = 'ideal-simulator';
	}
}
