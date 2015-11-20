<?php

/**
 * Title: iDEAL Simulator - iDEAL Lite / Basic config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_Config extends Pronamic_WP_Pay_Gateways_IDealBasic_Config {
	public function get_payment_server_url() {
		return 'https://www.ideal-simulator.nl/lite/';
	}
}
