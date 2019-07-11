<?php

require_once __DIR__ . '/Converter.php';

$plugin_slug = ( isset( $argv[1] ) ) ? $argv[1] : false;
$from        = ( isset( $argv[2] ) ) ? $argv[2] : false;
$to          = ( isset( $argv[3] ) ) ? $argv[3] : false;

if ( 2 === count( array_filter( $argv ) ) ) {
	echo 'WP2Github-MD Please Provide All Required Arguments.' . PHP_EOL;
	echo '1. Plugin Slug' . PHP_EOL;
	echo '2. Readme.txt Source File' . PHP_EOL;
	echo '3. Markdown Path To Save -- Optional' . PHP_EOL;
	return false;
}

if ( empty( $plugin_slug ) ) {
	echo 'WP2Github-MD : Invalid Plugin Slug';
	return false;
}

if ( ! filter_var( $from, FILTER_VALIDATE_URL ) && ! file_exists( $from ) ) {
	echo 'WP2Github-MD : Readme File Not Exists';
	return false;
}

if ( false === $to ) {
	$to = explode( '.txt', $from );
	$to = $to[0] . '.md';
}

$contents = @file_get_contents( $from );
if ( ! empty( $contents ) ) {
	$mk_content = WP2Github_MD\Converter::convert( $contents, $plugin_slug );
	file_put_contents( $to, $mk_content );
	echo 'Markdown File Saved @ ' . $to . PHP_EOL;
} else {
	echo 'Empty Markdown File !' . PHP_EOL;
}
