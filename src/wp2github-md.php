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

if ( ! file_exists( $from ) ) {
	echo 'WP2Github-MD : Readme File Not Exists';
	return false;
}

if ( false === $to ) {
	$to = explode( '.txt', $from );
	$to = $to[0] . '.md';
}

$mk_content = WP2Github_MD\Converter::convert( file_get_contents( $from ) );
file_put_contents( $to, $mk_content );
echo 'Markdown File Saved @ ' . $to;
//WPReadme2Markdown\Converter::convert();
