<?
return [
    '~^task/(\d+)$~' => [\Controllers\TasksController::class, 'view'],
    '~^$~' => [\Controllers\MainController::class, 'main'],
];
?>