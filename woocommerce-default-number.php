<?php
/*
Plugin Name: WooCommerce Set Default Number of Products
Plugin URI: https://geek.hellyer.kiwi/plugins/
Description: Changes the default number of products to purchase from 0 to 1
Author: Ryan Hellyer
Version: 1.1
Author URI: https://geek.hellyer.kiwi/

Copyright 2017 Ryan Hellyer

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/


add_filter( 'woocommerce_quantity_input_args', 'woocommerce_default_number' );
function woocommerce_default_number( $args ) {

	if ( 0 === $args['input_value'] ) {
		$args['input_value'] = 1;
	}

	return $args;
}
