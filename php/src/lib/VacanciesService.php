<?php 
  include __DIR__ . '/VacancyModel.php';
  class VacanciesService {
    private $database;
    public function __construct() {
      $this->database = Database::getInstance();
    }
    public function getAllVacancies() {
      $result = $this->database->getAllVacancies();
      $vacancies = [];
      while ($row = $result->fetch_assoc()) {
        $vacancy = new VacancyModel(
          $row['id'],
          $row['title'],
          $row['company'],
          $row['employment'],
          $row['experience_from'],
          $row['experience_to'],
          $row['city'],
          $row['salary_from'],
          $row['salary_to'],
          $row['description']
        );
        $vacancies[] = $vacancy;
      }
      return $vacancies;
    }
    public function getVacancyById($id) {
      $result = $this->database->getVacancyById($id);
      $row = $result->fetch_assoc();
      return new VacancyModel(
        $row['id'],
        $row['title'],
        $row['company'],
        $row['employment'],
        $row['experience_from'],
        $row['experience_to'],
        $row['city'],
        $row['salary_from'],
        $row['salary_to'],
        $row['description']
      );
    }
  } 
?>