<?php
include 'lib/tasks.php';
$task=[
    'title' => $_POST['title'],
    'status'=> "new",
    'created' => date("Y-m-d")
];



save_task($task);

header('location:index.php')
?>