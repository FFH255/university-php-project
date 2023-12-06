<?php class Template {
  protected $url;
  protected $args;
  public function __construct($template_url) {
    $this->url = $template_url;
  }
  public function __get($key) {
    return $this->args[$key];
  }
  public function __set($key, $value) {
    $this->args[$key] = $value;
  }
  public function __toString() {
    extract($this->args);
    chdir(dirname($this->url));
    ob_start();
    include basename($this->url);
    return ob_get_clean();
  }
}
?>