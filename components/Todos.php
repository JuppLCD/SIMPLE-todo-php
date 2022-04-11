<section class="mx-auto my-5 col-md-6" style="max-width: 700px;">
    <?php foreach ($todos as $todo) { ?>
        <div class="card mb-2">
            <div class="card-header">
                <h5 class="<?php echo $todo['complete'] === '1' ? 'text-decoration-line-through text-muted' : ''; ?>">
                    <?php echo $todo['title'];  ?>
                </h5>
            </div>
            <div class="card-body">
                <p class="card-text <?php echo $todo['complete'] === '1' ? 'text-decoration-line-through text-muted' : ''; ?>">
                    <?php echo $todo['description'];  ?>.
                </p>

                <!-- COMPLETE -->
                <form action="./actions/complete.php" method="POST" class="d-inline">
                    <input type="text" hidden name="id" value='<?php echo $todo['id']; ?>'>
                    <input type="text" hidden name="complete" value='<?php echo $todo['complete']; ?>'>
                    <button type="submit" class="btn btn-<?php echo $todo['complete'] === '1' ? 'dark' : 'success'; ?> "><?php echo $todo['complete'] === '1' ? 'Needs completing' : 'Complete'; ?></button>
                </form>

                <!-- EDIT -->
                <form action="./editTodo.php" method="POST" class="d-inline">
                    <input type="text" hidden name="id" value='<?php echo $todo['id']; ?>'>
                    <!-- EN LA PAGINA DEBERIA RECIBIR A ID, BUSCAR EN DB Y PONER LOS VALORES EN EL FORM -->
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>

                <!-- DELETE -->
                <form action="./actions/delete.php" method="POST" class="d-inline">
                    <input type="text" hidden name="id" value='<?php echo $todo['id']; ?>'>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    <?php } ?>
</section>