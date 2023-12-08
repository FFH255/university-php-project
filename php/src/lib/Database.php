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
    return $this->db->query('CALL SelectAllVacancies();');
  }

  public function getVacancyById($id) {
    $queryString = "SELECT * FROM vacancies WHERE id = $id;";
    return $this->db->query($queryString);
  }
  public function createVacancy($title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description) {
    $query = "SELECT InsertVacancy(?, ?, ?, ?, ?, ?, ?, ?, ?) AS new_id";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("sssssssss", $title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $id = $row['new_id'];
    return $id;
  }

  public function deleteVacancy($id) {
    $query = "DELETE FROM vacancies WHERE id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }

  function updateVacancy($id, $title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description) {
    $query = "UPDATE vacancies
      SET title=?, company=?, employment=?, experience_from=?, experience_to=?, city=?, salary_from=?, salary_to=?, description=?
      WHERE id=?";

    $stmt = $this->db->prepare($query);

    if (!$stmt) {
      die('Error in prepare(): ' . $this->db->error);
    }

    $stmt->bind_param("sssiisiisi", $title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description, $id);

    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }

  public function replayVacancy($vacancyId) {
    $query = "INSERT INTO replies (vacancy_id, created_at) VALUES (?, CURRENT_TIMESTAMP)";
    $stmt = $this->db->prepare($query);

    if (!$stmt) {
      return false;
    }

    $stmt->bind_param("i", $vacancyId);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }
} ?>