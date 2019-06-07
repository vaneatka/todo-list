<?php 
include 'config.php';
include 'lib/tasks.php';
$tasks = load_tasks(false);// ne vse
?>


<?php 
include 'templates/task-list.php';
include 'templates/task-form.php';
?>



