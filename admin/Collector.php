<?php
include_once('dataBase.php');

// Define configuration
//define("DB_HOST", "localhost");
//define("DB_USER", "postgres");
//$dbdefine("DB_PASS", "postgres");
//define("DB_NAME", "wootflix");

define("DB_HOST", "ec2-54-83-47-194.compute-1.amazonaws.com");
define("DB_USER", "joxdnzutsohxym");
define("DB_PASS", "219905459ac4abd0692899069a8fdeba4a9504e487b9e9eaeb2b11473627cab2");
define("DB_NAME", "d6qllf068lhdn5");

class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
