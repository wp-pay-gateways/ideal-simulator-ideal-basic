<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_IntegrationTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$integration = new Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_Integration();

		$expected = 'Pronamic_WP_Pay_Gateways_IDealSimulator_IDealBasic_ConfigFactory';

		$class = $integration->get_config_factory_class();

		$this->assertEquals( $expected, $class );
		$this->assertTrue( class_exists( $class ) );
	}
}
