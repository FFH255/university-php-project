<?php class VacancyModel {
  public $id;
  public $title;
  public $company;
  public $employment;
  public $experience_from;
  public $experience_to;
  public $city;
  public $salary_from;
  public $salary_to;
  public $description;
  public $replies;
  public function __construct(
    int $id = null, 
    string $title = null, 
    string $company = null, 
    string $employment = null, 
    int $experience_from = null, 
    int $experience_to = null, 
    string $city = null, 
    int $salary_from = null, 
    int $salary_to = null, 
    string $description = null,
    int $replies = null
  ) {
    $this->id = $id;
    $this->title = $title;
    $this->company = $company;
    $this->employment = $employment;
    $this->experience_from = $experience_from;
    $this->experience_to = $experience_to;
    $this->city = $city;
    $this->salary_from = $salary_from;
    $this->salary_to = $salary_to;
    $this->description = $description; 
    $this->replies = $replies;
  }
} ?>