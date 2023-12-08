<form class="vacancy-form" method="post" action="<?php echo $actionUrl ?>">
  <div>
    <label>Заголовок:</label>
    <input name="title" type="text" value="<?php $title; ?>" required />
  </div>

  <div>
    <label>Компания:</label>
    <input name="company" type="text" value="<?php $company; ?>" />
  </div>

  <div>
    <label>Занятость:</label>
    <input name="employment" type="text" value="<?php $employment; ?>" required />
  </div>

  <div>
    <label>Отып работы от:</label>
    <input name="experience_from" type="number" value="<?php $experience_from; ?>" />
  </div>

  <div>
    <label>Опыт работы до:</label>
    <input name="experience_to" type="number" value="<?php $experience_to; ?>" />
  </div>

  <div>
    <label>Город:</label>
    <input name="city" type="text" value="<?php $city; ?>" />
  </div>

  <div>
    <label>Зарплата от:</label>
    <input name="salary_from" type="number" value="<?php $salary_from; ?>" />
  </div>

  <div>
    <label>Зарплата до:</label>
    <input name="salary_to" type="number" value="<?php $salary_to; ?>" />
  </div>

  <div>
    <label>Описание:</label>
    <textarea name="description" value="<?php $description; ?>" required></textarea>
  </div>

  <input value="<?php echo $buttonContent; ?>" type="submit" />
</form>