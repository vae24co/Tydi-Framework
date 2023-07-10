<?php
//*** Index - The Entry » Tydi™ Framework © 2023 ∞ AO™ • @iamodao • www.osawere.com ∞ Apache License ***//
const TYDI = 'Tydi';
const DS = DIRECTORY_SEPARATOR;
const RD = __DIR__ . DS;
const PS = '/';
require RD . 'config.php';
$core = 'core.php';
if (!is_file(MD['LIBRY'] . $core)) {
	$e = '<strong>' . TYDI . '™</strong> • Core Unavailable!';
	if (defined('ENV')) {
		if (ENV === 'STAGING') {
			$core = DS . $core;
		} elseif (ENV === 'DEVELOPMENT') {
			$core = MD['LIBRY'] . $core;
		}
		exit($e . ' → [<em>' . $core . '</em>]');
	}
	$e = '<strong>' . TYDI . '™</strong> • Environment Undefined!';
	exit($e);
}
require MD['LIBRY'] . $core;
?>