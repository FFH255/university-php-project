DELIMITER //

CREATE FUNCTION InsertVacancy(
  p_title varchar(255),
  p_company varchar(255),
  p_employment varchar(255),
  p_experience_from int,
  p_experience_to int,
  p_city varchar(255),
  p_salary_from int,
  p_salary_to int,
  p_description TEXT
)
RETURNS INT
DETERMINISTIC
BEGIN
  DECLARE new_id INT;

  INSERT INTO vacancies (
    title,
    company,
    employment,
    experience_from,
    experience_to,
    city,
    salary_from,
    salary_to,
    description
  ) VALUES (
    p_title,
    p_company,
    p_employment,
    p_experience_from,
    p_experience_to,
    p_city,
    p_salary_from,
    p_salary_to,
    p_description
  );

  SET new_id = LAST_INSERT_ID();

  RETURN new_id;
END //

DELIMITER ;




#example usage

SELECT InsertVacancy(
  'Software Engineer',
  'ABC Company',
  'Full-time',
  2,
  5,
  'New York',
  80000,
  120000,
  'Description of the job...'
) AS new_id;






DELIMITER //

CREATE PROCEDURE SelectAllVacancies()
BEGIN
    SELECT
        id,
        title,
        company,
        employment,
        experience_from,
        experience_to,
        city,
        salary_from,
        salary_to,
        description
    FROM
        vacancies;
END //

DELIMITER ;


CALL SelectAllVacancies();









DELIMITER //

CREATE PROCEDURE getVacancyById(IN vacancyId INT, OUT v_id INT, OUT v_title VARCHAR(255), OUT v_company VARCHAR(255), OUT v_employment VARCHAR(255), OUT v_experience_from INT, OUT v_experience_to INT, OUT v_city VARCHAR(255), OUT v_salary_from INT, OUT v_salary_to INT, OUT v_description TEXT)
BEGIN
    SELECT
        `id`,
        `title`,
        `company`,
        `employment`,
        `experience_from`,
        `experience_to`,
        `city`,
        `salary_from`,
        `salary_to`,
        `description`
    INTO
        v_id,
        v_title,
        v_company,
        v_employment,
        v_experience_from,
        v_experience_to,
        v_city,
        v_salary_from,
        v_salary_to,
        v_description
    FROM
        `vacancies`
    WHERE
        `id` = vacancyId
    LIMIT 1;
END //

DELIMITER ;



