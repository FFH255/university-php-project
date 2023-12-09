<?php 
  $ROOT = $_SERVER["DOCUMENT_ROOT"];

  include_once $ROOT . '/lib/utils/redirect.php';
  include_once $ROOT . '/lib/VacancyModel.php';
  include_once $ROOT . '/lib/ReplyModel.php';
  include_once $ROOT . '/lib/utils/VacancyGuard.php';
  include_once $ROOT . '/lib/Database.php';
  include_once $ROOT . '/lib/VacanciesService.php';
  include_once $ROOT . '/lib/RepliesService.php';
  
  $db = Database::getInstance();
  $db->connect('db', 'root', 'root', 'job_finder_db');

  $vacancyGuard = VacancyGuard::getInstance();
  $vacancyGuard->configure(10, 10000000);
?>