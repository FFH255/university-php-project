<?php 
  $ROOT = $_SERVER["DOCUMENT_ROOT"];

  include_once $ROOT . '/lib/utils/redirect.php';
  include_once $ROOT . '/lib/VacancyModel.php';
  include_once $ROOT . '/lib/Database.php';
  include_once $ROOT . '/lib/VacanciesService.php';
  
  $db = Database::getInstance();
  $db->connect('db', 'root', 'root', 'job_finder_db');
?>