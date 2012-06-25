#!/usr/bin/php
<?php

/**
 * WordPress Salts and Keys
 *
 * Generates a set of salts and keys for use in wp-config.php.
 *
 * Based on https://api.wordpress.org/secret-key/1.1/salt/
 *
 * @author     Seth Lilly <seth@inceptiv.com>
 * @copyright  2012 Seth Lilly
 * @license    http://www.gnu.org/copyleft/gpl.html  GPL v3
 * @version    1.0
 * @link       http://inceptiv.com/
 */

function generateString(){
	$str = '';
	$length = 64;
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*(){}[]/|`,.?+-=:;';
	$count = strlen( $chars );
	while ( $length-- ) {
		$str .= $chars[mt_rand( 0, $count-1 )];
	}
	return $str;
}

$ret = '';

$keys = array( 'AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY', 'AUTH_SALT', 'SECURE_AUTH_SALT', 'LOGGED_IN_SALT', 'NONCE_SALT' );

foreach ( $keys as $key ){
	if ( next( $keys ) !== false ) {
		$eol = "\n";
	}
	$ret .= "define( '" . $key . "', '" . generateString() . "' );" . $eol;
}

echo $ret;

?>