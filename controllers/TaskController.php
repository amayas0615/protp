require_once './models/Task.php';
class TaskController {
 private $task;
 public function __construct($db) {
 $this->task = new Task($db);
 }
 public function index() {
 $tasks = $this->task->getAll();
 include './views/tasks/index.php';
 }
 public function create() {
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $this->task->create($_POST['title']);
 header('Location: index.php?action=index');
 } else {
 include './views/tasks/create.php';
 }
 }
 public function complete() {
 $this->task->complete($_GET['id']);
 header('Location: index.php?action=index');
 }
}
