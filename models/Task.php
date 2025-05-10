class Task {
 private $db;
 public function __construct($db) {
 $this->db = $db;
 }
 public function getAll() {
 return $this->db->query("SELECT * FROM tasks")->fetchAll(PDO::FETCH_ASSOC);
 }
 public function create($title) {
 $stmt = $this->db->prepare("INSERT INTO tasks (title, completed) VALUES (?, 0)");
 $stmt->execute([$title]);
 }
 public function complete($id) {
 $stmt = $this->db->prepare("UPDATE tasks SET completed = 1 WHERE id = ?");
 $stmt->execute([$id]);
 }
}

