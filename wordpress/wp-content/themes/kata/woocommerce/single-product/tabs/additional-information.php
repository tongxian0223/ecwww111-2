<?php
/**
 * Additional Information tab
 *
 * @package Kata\Templates
 *
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

do_action( 'woocommerce_product_additional_information', $product );
