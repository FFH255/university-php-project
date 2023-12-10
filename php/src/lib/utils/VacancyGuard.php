<?php class VacancyGuard {
  private static $instances = [];
  private int $maxExperience;
  private int $maxSalary;
  protected function __construct() { }
  protected function __clone() { }
  public function __wakeup() {
    throw new \Exception("Cannot unserialize a singleton.");
   }
  public static function getInstance(): VacancyGuard
  {
      $cls = static::class;
      if (!isset(self::$instances[$cls])) {
          self::$instances[$cls] = new static();
      }

      return self::$instances[$cls];
  }
  public function configure(int $maxExperience, int $maxSalary) {
    $this->maxExperience = $maxExperience;
    $this->maxSalary = $maxSalary;
  }
  public function check(VacancyModel $model) {
    if ($model->experience_from < 0 || $model->experience_to < 0) {
      return 'Опыт работы не может быть меньше нуля';
    }
    if ($model->experience_from > $model->experience_to) {
      return 'Неправильно задан диапазон опыта';
    }
    if ($model->experience_to > $this->maxExperience) {
      return "Опыт работы не может превышать $this->maxExperience";
    }
    if ($model->salary_from < 0 || $model->salary_to < 0) {
      return 'Оклад не может быть меньше нуля';
    }
    if ($model->salary_from > $model->salary_to) {
      return 'Неправильно задан диапазон окдала';
    }
    if ($model->salary_to > $this->maxSalary) {
      return "Окдал не может превышать $this->maxSalary";
    }
    return '';
  }
}?>