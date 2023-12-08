<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';

  $id = $_GET['id'] ?? null;
  if(!$id) {
    die();
  }

  $repliesService = new RepliesService();
  $repliesService->deleteReplyById($id);

  redirect('/replies.php');
?>