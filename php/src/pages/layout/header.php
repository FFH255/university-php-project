<?php 
  $headerLinks = [
    ['link' => '/', 'title' => 'Главная'],
    ['link' => '/create-vacancy.php', 'title' => 'Добавить вакансию'],
    ['link' => '/replies.php', 'title' => 'Отклики'],
  ];

  $currentURL = $_SERVER['REQUEST_URI'];
?>

<header>
  <h3>Job Finder</h3>
  <nav>
    <?php
      if (isset($headerLinks) && is_array($headerLinks)) {
        foreach ($headerLinks as $item) {
            $isActive = ($currentURL == $item['link']) ? 'active' : '';

            echo "<a href=\"{$item['link']}\" class=\"$isActive\">{$item['title']}</a>";
        }
      }
    ?>
  </nav>
  <form method="get" class="filter-title-form" action="/">
    <input name="filter_title" type="text" />
    <input type="submit" value="Найти" />
</form>
</header>
