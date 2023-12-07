<?php 
  $keys = [
    'title', 
    'company', 
    'employment', 
    'experience_from', 
    'experience_to', 
    'city', 
    'salary_from', 
    'salary_to', 
    'description'
  ];

  foreach ($keys as $key) {
    $param = $_GET[$key];
    $$key = ($param !== '' && isset($param)) ? $param : null;
  }

  if (!$title || !$employment || !$description) {
    echo "<h2>Заполните все необходимые поля</h2>";
    die();
  }

  require_once $_SERVER["DOCUMENT_ROOT"] . '/init.php';
  require_once  $ROOT . '/lib/VacanciesService.php';

  $vacanciesService = new VacanciesService();
  $id = $vacanciesService->createVacancy(
    $title, 
    $company, 
    $employment, 
    $experience_from, 
    $experience_to, 
    $city, 
    $salary_from, 
    $salary_to, 
    $description
  );

  include_once $ROOT . '/lib/utils/redirect.php';

  if ($id) {
    redirect("/vacancy.php?id={$id}");
  } else {
    redirect("/");
  }
?>