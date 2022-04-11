<?php
require(dirname(__FILE__) . '/../class/todos.class.php');

$_todos = new Todos;

$todoTitle = $_POST['todoTitle'] === '' ? null : $_POST['todoTitle'];
$todoDescription = $_POST['todoDescription'] === '' ? null : $_POST['todoDescription'];
$id = $_POST['todoId'] === '' ? null : $_POST['todoId'];

echo 'fuera';
if ($todoTitle !== null && $todoDescription !== null) {
    echo 'entro';
    $updateTodo = ['title' => $todoTitle, 'description' => $todoDescription, 'id' => $id];
    $resp = $_todos->updateTodo($updateTodo);
    if ($resp === 0) {
        // ERROR
        // TENGO QE REDIRECCIONAR A UNA PAGINA CON ERROR
    }
} else {
    echo 'Todos los campos son obligatorios';
}
header('Location: ./../index.php');
