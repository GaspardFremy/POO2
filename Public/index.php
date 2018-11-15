<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Models\Task;
use App\Models\MySqlDatabaseTaskStorage;

$task = new Task;
// $task->setDescription('Aller à WebStart');
// $task->setDue(new DateTime('+ 2 days'));

// print_r($task);


try {
    $pdo = new PDO('mysql:host=localhost;dbname=tasks', 'root', 'root');
} catch (Exception $e) {
    echo $e->getMessage();
}

// $query = $pdo->query('SELECT * FROM tasks');
// foreach ($query->fetchAll(PDO::FETCH_CLASS) as $task) {
//     // print_r($task);
// }


// Get all tasks
$storage = new MySqlDatabaseTaskStorage($pdo);
// $storage->all();

// Create a task
// $task = new Task;
// $task->setDescription('Go to Webstart')->setDue(new DateTime('+ 3 days'));


// $storage->store($task);

// $taskId = $storage->store($task);
// print_r($storage->get($taskId));

// Update a task
// $task = $storage->get(1);
// $task->setComplete();
// $storage->update($task);
