<?php 
  $headerLinks = [
    ['link' => '/', 'title' => 'Главная'],
    ['link' => '/create-vacancy.php', 'title' => 'Добавить вакансию'],
    ['link' => '/replies.php', 'title' => 'Отклики'],
  ];
?>

<header>
  <h3>Job Finder</h3>
  <nav>
    <?php
      if (isset($headerLinks) && is_array($headerLinks)) {
        foreach ($headerLinks as $item) {
            echo "<a href=\"{$item['link']}\">{$item['title']}</a>";
        }
      }
    ?>
  </nav>
</header>