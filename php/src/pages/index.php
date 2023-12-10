<?php 
  $filterTitle = $_GET['filter_title'] ?? '';

  $vacanciesService = new VacanciesService();
  $vacancies = $vacanciesService->getAllVacancies($filterTitle);
?>

<?php 
  if (count($vacancies) === 0) {
    echo "<h2 class='placeholder'>Список вакансий пуст</h2>";
  } else {
    foreach ($vacancies as $vacancy) {
      echo "<div class='vacancies-list'>";
      include $ROOT . '/ui/vacancyBrief.php';
      echo "</div>";
    }
  }
?>