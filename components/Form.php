<form action="<?php echo $formUrl; ?>" method="POST" style="max-width: 500px;" class="mx-auto border border-1 p-4 my-5 col-md-6">
    <h2>Create Your ToDo</h2>
    <div class="mb-3">
        <label for="todoTitle" class="form-label">Title:</label>
        <input type="text" name="todoTitle" class="form-control" id="todoTitle" placeholder="ToDo Title" value="<?php echo $todo['title'] ?? ''; ?>">
    </div>
    <div class="mb-3">
        <label for="todoDescription" class="form-label">Description:</label>
        <textarea name="todoDescription" id="todoDescription" class="form-control" placeholder="ToDo Description..." cols="30" rows="3" style="resize: none;"><?php echo $todo['description'] ?? ''; ?></textarea>
    </div>
    <?php if ($todo !== null) { ?>
        <input type="text" hidden name="todoId" id="todoId" class="form-control" value="<?php echo $todo['id'] ?? ''; ?>">
    <?php } ?>
    <button type="reset" class="btn btn-danger d-inline-block">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>