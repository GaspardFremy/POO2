<?php
namespace App\Storage;

use Todo\Models\Task;
use Todo\Storage\Contracts\TaskStorageInterface;


class MySqlDatabaseTaskStorage implements TaskStorageInterface
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function store(Task $task)
    {
        // print_r($task);
        // $query = $pdo->prepare("INSERT INTO tasks (complete, description, due) VALUES (:name, :value)");
        // $query->bindParam(':complete', $task['complete']);
        // $query->bindParam(':description', $task['description']);
        // $query->bindParam(':due', $task['due']);
        // $query->execute();
        //
        // $taskId = $pdo->lastInsertId();
        // return $taskId;

    }
    public function update(Task $task)
    {

    }
    public function get($id)
    {

    }
    public function all()
    {
        // $all = $this->pdo->query('SELECT * FROM tasks');
        // for ($all as $task)
        // {
        //     // echo "<p>{$task['description']}</p>";
        // }
    }
}
