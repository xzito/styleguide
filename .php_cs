<?php
// vim: set ft=php:

use Xzito\CS\Config\Config;

$config = new Config();

$config->getFinder()
  ->files()
  ->in('../' . __DIR__)
  // ->exclude('build')
  // ->exclude('vendor')
  ->name('*.php')
  // ->ignoreDotFiles(true)
  // ->ignoreVCS(true);
// $cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;
$config->setCacheFile(__DIR__ . '/.php_cs.cache');


