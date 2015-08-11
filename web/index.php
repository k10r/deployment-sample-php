<?php

$debug = [
  'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'],
  '__DIR__' => __DIR__,
  'REVISION' => trim(file_get_contents(sprintf('%s/../REVISION', __DIR__)))
];

echo sprintf('<pre>%s</pre>', print_r($debug, true));

phpinfo();