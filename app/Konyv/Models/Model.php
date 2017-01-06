<?php

namespace Konyv\Models;

use PDO;
use stdClass;

class Model extends stdClass
{
  public $db;
  protected $config;

  public function __construct()
  {
    $this->getConfig();
    $this->connect();
  }

  protected function getConfig()
  {
    $this->config = parse_ini_file('config.ini', true);
  }

  public function connect()
  {
    $this->db = new PDO(
      'mysql:host=localhost;dbname=' . $this->config['db']['name'],
      $this->config['db']['user'],
      $this->config['db']['pass'],
      [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
    );
  }

}
