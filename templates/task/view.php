<?php include $_SERVER['DOCUMENT_ROOT']. '/task_book/templates/header.php'; ?>
    <h1><?= $task->getName()?></h1>
    <p><?= $task->getText() ?></p>
<?php include $_SERVER['DOCUMENT_ROOT']. '/task_book/templates/footer.php'; ?>