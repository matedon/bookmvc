<?php

class Autoloader
{
  static public function loader($className)
  {
    $filename = getcwd() . '/app/' . str_replace('\\', '/', $className) . '.php';
    echo $filename . PHP_EOL;
    if (file_exists($filename)) {
      require_once($filename);
      if (class_exists($className)) {
        return true;
      }
    }
    return false;
  }
}

spl_autoload_register('Autoloader::loader');
