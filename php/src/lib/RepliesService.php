<?php class RepliesService {
    private $database;
    public function __construct() {
      $this->database = Database::getInstance();
    }
    public function getAllReplies() {
      $result = $this->database->getAllReplies();
      $replies = [];
      while ($row = $result->fetch_assoc()) {
        $reply = new ReplyModel(
          $row['id'],
          $row['vacancy_id'],
          $row['title'],
          $row['company'],
          $row['created_at']
        );
        $replies[] = $reply;
      }
      return $replies;
    }
  } 
?>