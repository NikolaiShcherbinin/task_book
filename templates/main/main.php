<?php include $_SERVER['DOCUMENT_ROOT']. '/task_book/templates/header.php'; ?>

            <?php foreach ($tasks as $task): ?>
                <h2><a href="/task_book/task/<?= $task->getId()?>"><?= $task->getName() ?></a></h2>
                <p><?= $task->getText() ?></p>
     
            <?php endforeach; ?>
       
<?php include $_SERVER['DOCUMENT_ROOT']. '/task_book/templates/footer.php'; ?>