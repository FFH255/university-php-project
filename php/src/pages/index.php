<?php 
  $filterTitle = $_GET['filter_title'] ?? '';

  $vacanciesService = new VacanciesService();
  $vacancies = $vacanciesService->getAllVacancies($filterTitle);
?>

<?php 
  if (count($vacancies) === 0) {
    echo "<h2 class='placeholder'>Список вакансий пуст</h2>";
  } else {
    echo "<div class='list'>";
    foreach ($vacancies as $vacancy) {
      include $ROOT . '/ui/vacancyBrief.php';
    }
    echo "</div>";
  }
?>