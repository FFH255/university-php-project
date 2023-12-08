<div class="create-vacancy-page">
  <h1>Добавить вакансию</h2>
  <?php 
    $buttonContent = "Добавить";
    $actionUrl = "/actions/create-vacancy.php";
    $vacancy = new VacancyModel(null, null, null, null, null, null, null, null, null, null);
    include_once $ROOT . '/ui/vacancyForm.php';
  ?>
</div>