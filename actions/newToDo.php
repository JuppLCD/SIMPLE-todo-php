<?php
require(dirname(__FILE__) . '/../class/todos.class.php');

$_todos = new Todos;

$todoTitle = $_POST['todoTitle'] === '' ? false : $_POST['todoTitle'];
$todoDescription = $_POST['todoDescription'] === '' ? false : $_POST['todoDescription'];

if ($todoTitle !== false && $todoDescription !== false) {
    $newTodo = ['title' => $todoTitle, 'description' => $todoDescription];
    $resp = $_todos->newTodo($newTodo);
    if ($resp === 0) {
        // ERROR
        // TENGO QE REDIRECCIONAR A UNA PAGINA CON ERROR
    }
} else {
    echo 'Todos los campos son obligatorios';
}
header('Location: ./../index.php');
