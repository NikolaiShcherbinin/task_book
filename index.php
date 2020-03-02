            <?

            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);

            spl_autoload_register(function (string $className) {
                require_once __DIR__ . '/src/' . str_replace('\\','/',$className) . '.php';
            });


                //$author = new \Models\Users\User("Николай");
                //$task = new \Models\Tasks\Task("Заголовок задачи", "Техническое задание задачи", $author);
                //echo 'Задача от: ' . $task->getAuthor()->getName();
                

               /* $controller = new \Controllers\MainController();
               
                if (!empty($_GET['name'])) {
                    $controller->sayHello($_GET['name']);
                } else {
                    $controller->main();
                }*/

                $route = $_GET['route'] ?? '';
                    $routes = require __DIR__ . '/src/routes.php';

                    $isRouteFound = false;
                    foreach ($routes as $pattern => $controllerAndAction) {
                        preg_match($pattern, $route, $matches);
                        if (!empty($matches)) {
                            $isRouteFound = true;
                            break;
                        }
                    }

                    if (!$isRouteFound) {
                        echo 'Страница не найдена!';
                        return;
                    }

                    unset($matches[0]);

                    $controllerName = $controllerAndAction[0];
                    $actionName = $controllerAndAction[1];

                    $controller = new $controllerName();
                    $controller->$actionName(...$matches);
                                                          

                
            ?>
