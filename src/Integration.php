<?php

/**
 * Title: iDEAL Simulator - iDEAL Lite / Basic integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		parent::__construct();

		$this->id       = 'ideal-simulator-ideal-basic';
		$this->name     = 'iDEAL Simulator - iDEAL Lite / Basic';
		$this->provider = 'ideal-simulator';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_ConfigFactory';
	}
}
