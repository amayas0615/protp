<h1>Liste des tâches</h1>
<a href="index.php?action=create">Ajouter une tâche</a>
<ul>
<?php foreach ($tasks as $task): ?>
 <li>
 <?= htmlspecialchars($task['title']) ?>
 <?php if (!$task['completed']): ?>
 <a href="index.php?action=complete&id=<?= $task['id'] ?>">[Compléter]</a>
 <?php else: ?>
 <strong>(Terminé)</strong>
 <?php endif; ?>
 </li>
<?php endforeach; ?>
</ul>
