<div class="vacancy-form-wrapper">
  <h1><?php echo $title; ?></h1>
  <form class="vacancy-form" method="post" action="<?php echo $actionUrl ?>">    
    <input name="id" type="hidden" value="<?php echo $vacancy->id; ?>" />
    <div>
      <label>Заголовок:</label>
      <input name="title" type="text" value="<?php echo $vacancy->title; ?>" required />
    </div>

    <div>
      <label>Компания:</label>
      <input name="company" type="text" value="<?php echo $vacancy->company; ?>" />
    </div>

    <div>
      <label>Занятость:</label>
      <input name="employment" type="text" value="<?php echo $vacancy->employment; ?>" required />
    </div>

    <div>
      <label>Отып работы от:</label>
      <input name="experience_from" type="number" value="<?php echo $vacancy->experience_from; ?>" />
    </div>

    <div>
      <label>Опыт работы до:</label>
      <input name="experience_to" type="number" value="<?php echo $vacancy->experience_to; ?>" />
    </div>

    <div>
      <label>Город:</label>
      <input name="city" type="text" value="<?php echo $vacancy->city; ?>" />
    </div>

    <div>
      <label>Зарплата от:</label>
      <input name="salary_from" type="number" value="<?php echo $vacancy->salary_from; ?>" />
    </div>

    <div>
      <label>Зарплата до:</label>
      <input name="salary_to" type="number" value="<?php echo $vacancy->salary_to; ?>" />
    </div>

    <div>
      <label>Описание:</label>
      <textarea name="description"required><?php echo $vacancy->description; ?></textarea>
    </div>

    <input value="<?php echo $buttonContent; ?>" type="submit" />
  </form>
</div>