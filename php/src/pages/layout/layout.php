<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/main.css">
  <title><?php $title; ?></title>
</head>
<body>
  <?php require_once __DIR__ . '/header.php'; ?>
  <main>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/pages' . $_SERVER["PHP_SELF"]; ?>
  </main>
</body>
</html>