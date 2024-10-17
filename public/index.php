<?php
const BASE_PATH = __DIR__ . '/../';

require '../Core/functions.php';

spl_autoload_register(static function ($class) {
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  require basePath("{$class}.php");
});

require basePath('Core/router.php');
