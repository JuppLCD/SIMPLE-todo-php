<?php
require(dirname(__FILE__) . '/../class/todos.class.php');

$_todos = new Todos;

$todoId = $_POST['id'] === '' ? null : $_POST['id'];
$complete = $_POST['complete'] === '' ? null : $_POST['complete'];

echo is_bool(filter_var($complete, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) ? 'es verdad' : 'no es verdad';


if ($todoId !== null && is_bool(filter_var($complete, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))) {
    $complete = !$complete;
    $updateTodo = ['complete' => $complete, 'id' => $todoId];
    $res = $_todos->completeTodo($updateTodo);
    if ($res === 0) {
        // ERROR
        // ID NO EXISTENTE
        // TENGO QE REDIRECCIONAR A UNA PAGINA CON ERROR
    }
} else {
    echo 'Bad data';
}
header('Location: ./../index.php');
