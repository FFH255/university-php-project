<?php 
  $repliesService = new RepliesService();
  $replies = $repliesService->getAllReplies(); 
?>

<div>
<?php 
    foreach ($replies as $reply) {
      include $ROOT . '/ui/replyBrief.php';
    }
  ?>
</div>