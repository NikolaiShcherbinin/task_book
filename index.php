<!doctype html>
<html>
    <head>
    	
        <meta charset="utf-8">
        <title>Тестирование GIT</title>
    </head>
    <body>
      
        <h1>Тестирование GIT</h1>
		<div class="content">
            <?
            require __DIR__ . '/../src/Models/Users/User.php';
            require __DIR__ . '/../src/Models/Task/Task.php';

                $author = new User('Николай');
                $article = new Task('Заголовок задачи', 'Техническое задание задачи', $author);
                var_dump($article);
            ?>
        </div>
		

    </body>
</html>