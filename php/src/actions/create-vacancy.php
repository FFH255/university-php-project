<?php
  require_once $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';

  $keys = [
    'id',
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

  $data = [];

  foreach ($keys as $key) {
      $param = $_POST[$key] ?? null;
      $data[$key] = ($param !== '' && isset($param)) ? $param : null;
  }

  if (!$data['title'] || !$data['employment'] || !$data['description']) {
    die();
  }
  
  $vacancyModel = new VacancyModel(...array_values($data));

  $vacancyGuard = VacancyGuard::getInstance();
  $errorMessage = $vacancyGuard->check($vacancyModel);

  if ($errorMessage !== '') {
    echo "
      <script>
        alert('$errorMessage');
        window.history.back();
      </script>
    ";
  } else {
    $vacanciesService = new VacanciesService();
    $result = $vacanciesService->createVacancy($vacancyModel);
  
    redirect('/');
  }
?>