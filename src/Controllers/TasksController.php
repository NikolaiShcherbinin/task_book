<?
namespace Controllers;

use Services\Db;
use View\View;

class TasksController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View($_SERVER['DOCUMENT_ROOT'].'/task_book/templates');
        $this->db = new Db();
    }

    public function view(int $TaskId)
    {
        $result = $this->db->query(
            'SELECT * FROM `tasks` WHERE id = :id;',
            [':id' => $TaskId]
        );

        if ($result === []) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }


        $this->view->renderHtml('task/view.php', ['task' => $result[0]]);
    }
}
?>