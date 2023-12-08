<?php class Database {
  private static $instances = [];
  protected $db;
  protected function __construct() { }
  protected function __clone() { }
  public function __wakeup() {
    throw new \Exception("Cannot unserialize a singleton.");
   }
  public static function getInstance(): Database
  {
      $cls = static::class;
      if (!isset(self::$instances[$cls])) {
          self::$instances[$cls] = new static();
      }

      return self::$instances[$cls];
  }
  public function connect($hostname, $username, $password, $dbname) {
    $this->db = new mysqli($hostname, $username, $password, $dbname);
  }
  public function getAllVacancies() {
    $query = 'SELECT *, (SELECT COUNT(*) FROM replies WHERE replies.vacancy_id = vacancies.id) AS replies FROM vacancies';
    $result = $this->db->query($query);
    return $result;
  }

  public function getVacancyById($id) {
    $query = "SELECT * FROM vacancies WHERE id = $id;";
    $result = $this->db->query($query);
    return $result;
  }
  public function createVacancy(VacancyModel $model) {
    $query = "INSERT INTO vacancies (
      title,
      company,
      employment,
      experience_from,
      experience_to,
      city,
      salary_from,
      salary_to,
      description
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $this->db->prepare($query);
    $stmt->bind_param(
      "sssiisiis", 
      $model->title, 
      $model->company, 
      $model->employment, 
      $model->experience_from, 
      $model->experience_to, 
      $model->city, 
      $model->salary_from, 
      $model->salary_to, 
      $model->description,
    );
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
  }

  public function deleteVacancy($id) {
    $query = "DELETE FROM vacancies WHERE id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }

  function updateVacancy(VacancyModel $model) {
    $query = "UPDATE vacancies SET 
      title=?, 
      company=?, 
      employment=?, 
      experience_from=?, 
      experience_to=?, 
      city=?, 
      salary_from=?, 
      salary_to=?, 
      description=? WHERE id=?
    ";

    $stmt = $this->db->prepare($query);
    $stmt->bind_param(
      "sssiisiisi", 
      $model->title, 
      $model->company, 
      $model->employment, 
      $model->experience_from, 
      $model->experience_to, 
      $model->city, 
      $model->salary_from, 
      $model->salary_to, 
      $model->description, 
      $model->id
    );

    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }

  public function replyVacancy($vacancyId) {
    $query = "INSERT INTO replies (vacancy_id, created_at) VALUES (?, CURRENT_TIMESTAMP)";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $vacancyId);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }
} ?>