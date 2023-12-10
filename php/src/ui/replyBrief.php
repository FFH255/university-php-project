<?php 
  $deleteReplyUrl = "/actions/delete-reply.php?id=$reply->id";
?>

<?php 
  echo "
    <div class='item _border_sub'>
      <h3 class='item__title'>$reply->vacancy_title</h3>
      <span>$reply->vacancy_company</span>
      <span>$reply->created_at</span>
      <div class='item__buttons'>
        <a class='button button_theme_danger' href='$deleteReplyUrl'>Удалить</a>
      </div>
    </div>
  ";
?>