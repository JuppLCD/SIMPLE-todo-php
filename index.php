<?php
require('./class/todos.class.php');

$_todos = new Todos;
$todos = $_todos->getTodos();
if ($todos === 0) {
    $todos = [];
}
$formUrl = './actions/newToDo.php';
$todo = null;
?>
<?php include('./components/Head.php'); ?>

<h1 class="text-center my-3">ToDo Page</h1>

<div class="row">
    <?php include('./components/Form.php'); ?>

    <?php include('./components/Todos.php'); ?>
</div>

<?php include('./components/Footer.php'); ?>