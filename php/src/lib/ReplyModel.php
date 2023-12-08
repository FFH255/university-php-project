<?php class ReplyModel { 
  public $id;
  public $vacancy_id;
  public $vacancy_title;
  public $vacancy_company;
  public $created_at;
  public function __construct($id, $vacancy_id, $vacancy_title, $vacancy_company, $created_at) {
    $this->id = $id;
    $this->vacancy_id = $vacancy_id;
    $this->vacancy_title = $vacancy_title;
    $this->vacancy_company = $vacancy_company;
    $this->created_at = $created_at;
  }
} ?>