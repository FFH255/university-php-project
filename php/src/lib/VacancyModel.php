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
  public function __construct($id, $title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description) {
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
  }
} ?>