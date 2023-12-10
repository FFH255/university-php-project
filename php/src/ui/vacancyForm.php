<h1 class="form-title" ><?php echo $title; ?></h1>
<form class="form" method="post" action="<?php echo $actionUrl ?>">    
  <input name="id" type="hidden" value="<?php echo $vacancy->id; ?>" />
  <div class="form__item form__item_direction_col">
    <label>Заголовок:</label>
    <input name="title" type="text" class="input _border_main" value="<?php echo $vacancy->title; ?>" required />
  </div>

  <div class="form__item form__item_direction_col">
    <label>Компания:</label>
    <input name="company" type="text" class="input _border_main" value="<?php echo $vacancy->company; ?>" />
  </div>

  <div class="form__item form__item_direction_col">
    <label>Занятость:</label>
    <input name="employment" type="text" class="input _border_main" value="<?php echo $vacancy->employment; ?>" required />
  </div>

  <div class="form__item form__item_direction_row">
    <div class="form__item form__item_direction_col">
      <label>Отып работы от:</label>
      <input name="experience_from" type="number"  class="input _border_main" value="<?php echo $vacancy->experience_from; ?>" />
    </div>

    <div class="form__item form__item_direction_col">
      <label>Опыт работы до:</label>
      <input name="experience_to" type="number"  class="input _border_main" value="<?php echo $vacancy->experience_to; ?>" />
    </div>
  </div>

  <div class="form__item form__item_direction_col">
    <label>Город:</label>
    <input name="city" type="text"  class="input _border_main" value="<?php echo $vacancy->city; ?>" />
  </div>

  <div class="form__item form__item_direction_row">
    <div class="form__item form__item_direction_col">
      <label>Зарплата от:</label>
      <input name="salary_from" type="number"  class="input _border_main" value="<?php echo $vacancy->salary_from; ?>" />
    </div>

    <div class="form__item form__item_direction_col" >
      <label>Зарплата до:</label>
      <input name="salary_to" type="number"  class="input _border_main" value="<?php echo $vacancy->salary_to; ?>" />
    </div>
  </div>

  <div class="form__item form__item_direction_col">
    <label>Описание:</label>
    <textarea name="description"  class="input _border_main" required><?php echo $vacancy->description; ?></textarea>
  </div>

  <input class="button button_theme_positive" value="<?php echo $buttonContent; ?>" type="submit" />
</form>