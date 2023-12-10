<?php 
  $repliesService = new RepliesService();
  $replies = $repliesService->getAllReplies(); 
?>

<div>
  <?php 
    if (count($replies) === 0) {
      echo "<h2 class='placeholder'>Вы еще ни разу не откликнулись</h2>";
    } else {
      echo "<div class='vacancies-list'>";
      foreach ($replies as $reply) {
        include $ROOT . '/ui/replyBrief.php';
      }
      echo "</div>";
    }
  ?>
</div>