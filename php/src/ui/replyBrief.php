<?php 
  $deleteReplyUrl = "/actions/delete-reply.php?id=$reply->id";
?>

<?php 
  echo "
    <div class='vacancy vacancy_bordered'>
      <h3 class='vacancy__title'>$reply->vacancy_title</h3>
      <span>$reply->vacancy_company</span>
      <span>$reply->created_at</span>
      <div class='vacancy__buttons'>
        <a class='button button_theme_danger' href='$deleteReplyUrl'>Удалить</a>
      </div>
    </div>
  ";
?>