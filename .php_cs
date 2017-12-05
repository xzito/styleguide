<?php
// vim: set ft=php:

require 'site/vendor/autoload.php';

use Xzito\CS\Config\Config;

$config = new Config();
$config->setIndent("  ");
$config->getFinder()
  ->files()
  ->in('site/content/themes')
  ->exclude('site/content/themes/twenty*')
  ->name('*.php')
  ->ignoreDotFiles(true)
  ->ignoreVCS(true);
$config->setCacheFile(__DIR__ . '/.php_cs.cache');

return $config;

