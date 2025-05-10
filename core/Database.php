
<?php
class Database {
 public function getConnection() {
 return new PDO('mysql:host=localhost;dbname=todo', 'root', '');
 }
}
?>
