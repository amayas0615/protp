<?php
require_once './core/Database.php';
require_once './controllers/TaskController.php';
$db = (new Database())->getConnection();
$controller = new TaskController($db);
$action = $_GET['action'] ?? 'index';
if (method_exists($controller, $action)) {
 $controller->$action();
} else {
 echo "Action non trouvée.";
}

?>
