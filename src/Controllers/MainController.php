<?
namespace Controllers;
use Models\Tasks\Task;
use Services\Db;
use View\View;

class MainController
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

    public function main()
    {
         $tasks = $this->db->query('SELECT * FROM `tasks`;', [], Task::class);
        
         $this->view->renderHtml('main/main.php', ['tasks' => $tasks]);
    }

   

}


?>
