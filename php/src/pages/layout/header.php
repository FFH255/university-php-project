<?php 
  $headerLinks = [
    ['link' => '/', 'title' => 'Главная'],
    ['link' => '/create-vacancy.php', 'title' => 'Добавить вакансию'],
    ['link' => '/replies.php', 'title' => 'Отклики'],
  ];

  $currentURL = $_SERVER['REQUEST_URI'];
?>

<header class="header">
  <h3 class="header__sitename">Job Finder</h3>
  <nav class="header__navigation">
    <?php
      if (isset($headerLinks) && is_array($headerLinks)) {
        foreach ($headerLinks as $item) {
            $isActive = ($currentURL == $item['link']) ? 'header__link_active' : '';

            echo "<a href=\"{$item['link']}\" class=\"header__link $isActive\">{$item['title']}</a>";
        }
      }
    ?>
  </nav>
  <form method="get" class="search-title" action="/">
    <input name="filter_title" type="text" class="search-title__input" />
    <input type="submit" value="Найти" class="search-title__button" />
</form>
</header>
