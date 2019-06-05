<?php
function load_tasks(){
    $data = file_get_contents('database/tasks.json');
    $tasks = json_decode($data, true);
    return $tasks;
}

function save_task($task){
    $tasks = load_tasks();
    $tasks[]=$task;
    $data = json_encode($tasks, JSON_PRETTY_PRINT);
    file_put_contents('database/tasks.json', $data);
}

?>