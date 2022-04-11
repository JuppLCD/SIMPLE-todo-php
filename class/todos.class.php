<?php
require(dirname(__FILE__) . '/../db/conection.php');

class Todos extends conexion
{

    public function getTodos()
    {
        $query = "SELECT id,title,description,complete FROM  todos";
        $data = parent::getData($query);
        if ($data) {
            return $data;
        }
        return 0;
    }
    public function getTodo($id)
    {
        $query = "SELECT id,title,description,complete FROM  todos WHERE id = $id";
        $data = parent::getData($query);
        if ($data) {
            return $data;
        }
        return 0;
    }

    public function newTodo($newTodo)
    {
        $title = $newTodo['title'];
        $description = $newTodo['description'];
        $query = "INSERT INTO todos (title,description) values ('$title', '$description')";

        $resp = parent::nonQuery($query);
        if ($resp) {
            return $resp;
        }
        return 0;
    }

    public function updateTodo($todo)
    {
        $id = $todo['id'];
        $title = $todo['title'];
        $description = $todo['description'];

        $query = "UPDATE todos SET title ='$title',description = '$description' WHERE id = '$id'";

        $resp = parent::nonQuery($query);
        if ($resp >= 1) {
            return $resp;
        }
        return 0;
    }

    public function completeTodo($todo)
    {
        $complete = $todo['complete'];
        $id = $todo['id'];
        $query = "UPDATE todos SET complete = '$complete' WHERE id = '$id'";
        $resp = parent::nonQuery($query);
        if ($resp >= 1) {
            return $resp;
        }
        return 0;
    }

    public function deleteTodo($id)
    {
        $query = "DELETE FROM  todos  WHERE id= '$id'";
        $resp = parent::nonQuery($query);
        if ($resp >= 1) {
            return $resp;
        }
        return 0;
    }
}
