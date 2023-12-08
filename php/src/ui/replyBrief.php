<?php 
  $deleteReplyUrl = "/actions/delete-reply.php?id=$reply->id";
?>

<?php 
  echo "
    <div>
      <h3>$reply->vacancy_title</h3>
      <span>$reply->vacancy_company</span>
      <span>$reply->created_at</span>
      <a href='$deleteReplyUrl'>Удалить</a>
    </div>
  ";
?>