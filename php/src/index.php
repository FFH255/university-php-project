<?php include_once './lib/Template.php'?>

<?php
$template = new Template('./templates/frontpage.php');
$template->title = 'Hello from template';
echo $template;
?>