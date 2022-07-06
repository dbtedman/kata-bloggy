<?php

/**-----------------------------------------------------------------------------
 *
 * Author URI:      https://danieltedman.com
 * Author:          Daniel Tedman
 * Description:     Placeholder
 * Plugin Name:     Bloggy
 * Plugin URI:      https://github.com/dbtedman/kata-bloggy
 * Text Domain:     bloggy
 * Version:         0.0.0
 *
 *----------------------------------------------------------------------------*/

declare(strict_types=1);

// Load external PHP modules from composer, this includes the source code for
// this plugin and 3rd party libraries.
include_once('/app/vendor/autoload.php');

$plugin = new \Bloggy\Plugin\Plugin();
$plugin->bind();
