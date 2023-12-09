<?php class VacanciesService {
    private $database;
    public function __construct() {
      $this->database = Database::getInstance();
    }
    public function getAllVacancies(string $filterTitle = '') {
      $result = $this->database->getAllVacancies($filterTitle);
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
          $row['description'],
          $row['replies']
        );
        $vacancies[] = $vacancy;
      }
      return $vacancies;
    }
    public function getVacancyById($id) {
      $result = $this->database->getVacancyById($id);
      $row = $result->fetch_assoc();
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
      return $vacancy;
    }
    public function createVacancy(VacancyModel $model) {
      return $this->database->createVacancy($model);
    }
    public function deleteVacancy(int $id) {
      return $this->database->deleteVacancy($id);
    }
    function editVacancy(VacancyModel $model) {
      return $this->database->updateVacancy($model);
    }
    function replyVacancy(int $vacancyId) {
      return $this->database->replyVacancy($vacancyId);
    }
  } 
?>