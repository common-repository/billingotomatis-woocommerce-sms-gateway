<?php
/*
Plugin Name: Billingotomatis - Woocommerce, SMS gateway
Plugin URI: http://billingotomatis.com
Description: Dengan plugin ini Anda bisa menggunakan mengintegrasikan notifikasi woocomerce Anda dengan SMS Gateway Billingotomatis.
Author: BillingOtomatis.com
Version: 20190111
*/
if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include_once(dirname(__FILE__)."/functions.php");
if(is_file(dirname(__FILE__)."/hooks.php")) include_once(dirname(__FILE__)."/hooks.php");
