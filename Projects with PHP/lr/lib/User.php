<?php
    include_once 'Session.php';
    include 'Database.php';
/**
 *
 */
class User
{
    private $db;
    Public function __construct()
  {
    $this->db = new Database();
  }
}


?>
