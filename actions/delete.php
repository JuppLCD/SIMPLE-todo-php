<?php
require(dirname(__FILE__) . '/../class/todos.class.php');

$_todos = new Todos;

$todoId = $_POST['id'] === '' ? false : $_POST['id'];

if ($todoId !== false) {
    $res = $_todos->deleteTodo($todoId);
    if ($res === 0) {
        // ERROR
        // ID NO EXISTENTE
        // TENGO QE REDIRECCIONAR A UNA PAGINA CON ERROR
    }
} else {
    echo 'No se envio un id valido';
}
header('Location: ./../index.php');
