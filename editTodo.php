<?php
require(dirname(__FILE__) . '/class/todos.class.php');

$_todos = new Todos;

$id = $_POST['id'] ?? '';

if ($id === '') {
    header('Location: ./index.php');
}
$todo = $_todos->getTodo($id);
$formUrl = './actions/updateTodo.php';

?>
<?php include('./components/Head.php'); ?>

<h1 class="text-center">Edita tu ToDo</h1>

<?php
if ($todo === 0) {
    echo "<p class='text-danger text-center h3'>Ocurrio un Error en el servidor, por favor valla al inicio</p>";
} else {
    $todo = $todo[0];
    include('./components/Form.php');
}
?>

<?php include('./components/Footer.php'); ?>