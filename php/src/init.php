<?php 
  $ROOT = $_SERVER["DOCUMENT_ROOT"];
  include_once './lib/Database.php';
  $db = Database::getInstance();
  $db->connect('db', 'root', 'root', 'job_finder_db');
?>