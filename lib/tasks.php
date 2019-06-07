<?php
function load_tasks($all=true ){
    $data = file_get_contents('database/tasks.json');
    $tasks = json_decode($data, true);
    $t_page = ceil(count($tasks)/PER_PAGE);
    $c_page = $_GET['page'] ?? 1;
    //pagination
if($all){
    $page = [
        'items' => $tasks,
        'total_pages' => $t_page, 
        'current_page' => $c_page,    ];
}else{
    $page = [
        'items' => array_slice($tasks, ($c_page-1)*PER_PAGE , PER_PAGE),
        'total_pages' => $t_page, 
        'current_page' => $c_page,    
    ];
}

    return $page;
}

function save_task($task){
    $tasks = load_tasks();
    $tasks = $tasks['items'];
    $tasks[]=$task; 
    $data = json_encode($tasks, JSON_PRETTY_PRINT);
    file_put_contents('database/tasks.json', $data);
}

?>