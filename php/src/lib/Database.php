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
} ?>