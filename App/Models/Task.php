<?php
namespace App\Models;

class Task
{
    protected $id;
    protected $complete;
    protected $description;
    protected $due;


    // GETTERS
    public function getComplete()
    {
        return $this->$complete;
    }
    public function getDescription()
    {
        return $this->$description;
    }

    public function getDue()
    {
        return $this->$due;
    }

    // SETTERS

    public function setComplete($complete)
    {
        $this->complete = $complete;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setDue($due)
    {
        $this->due = $due;
    }
}
