<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

# Use this file if you cannot use class autoloading. It will include all the
# files needed for the MarkdownExtra parser.
#
# Take a look at the PSR-0-compatible class autoloading implementation
# in the Readme.php file if you want a simple autoloader setup.
require_once dirname(__FILE__) . '/MarkdownInterface.php';
require_once dirname(__FILE__) . '/Markdown.php';
require_once dirname(__FILE__) . '/MarkdownExtra.php';

?>