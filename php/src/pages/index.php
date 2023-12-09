<?php 
  $filterTitle = $_GET['filter_title'] ?? '';

  $vacanciesService = new VacanciesService();
  $vacancies = $vacanciesService->getAllVacancies($filterTitle);
?>

<form method="get" class="filter-title-form">
  <input name="filter_title" type="text" value="<?php echo $filterTitle; ?>" />
  <input type="submit" value="Найти" />
</form>

<div class='vacancies-list'>
  <?php 
    foreach ($vacancies as $vacancy) {
      include $ROOT . '/ui/vacancyBrief.php';
    }
  ?>
</div>