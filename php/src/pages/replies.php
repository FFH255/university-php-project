<?php 
  $repliesService = new RepliesService();
  $replies = $repliesService->getAllReplies(); 
?>

<div>
  <?php 
    if (count($replies) === 0) {
      echo "<h2>Вы еще ни разу не откликнулись</h2>";
    }
    foreach ($replies as $reply) {
      include $ROOT . '/ui/replyBrief.php';
    }
  ?>
</div>