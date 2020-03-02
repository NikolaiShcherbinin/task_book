<?
namespace Controllers;
use View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View($_SERVER['DOCUMENT_ROOT'].'/task_book/templates');
    }

    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

}


?>