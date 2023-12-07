<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/lib/VacanciesService.php';
  $vacanciesService = new VacanciesService();
  $vacancies = $vacanciesService->getAllVacancies();
?>

<div class='vacancies-list'>
  <?php 
    foreach ($vacancies as $vacancy) {
      echo "
        <a href='/vacancy.php?id={$vacancy->id}'>
          <h3>{$vacancy->title}</h3>
          <span>{$vacancy->company}</span>
          <span>{$vacancy->city}</span>
          <span>{$vacancy->employment}</span>
          <span>от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
          <span>от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
          <button>Откликнуться</button>
        </a>
      ";
    }
  ?>
</div>