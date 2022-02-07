<?php
$my_todos = get_todos();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="view/css/style.css">
  <title>ToDoApp</title>
</head>

<body>
  <header>
    <h1>ToDoApp</h1>
  </header>
  <main>
    <section class="newTodo">
      <h2>Create New ToDo</h2>
      <form action="" method="post">
        <input type="text" name="todo" id="" placeholder="New To Do">
        <label for="descript">ToDo Description</label>
        <textarea name="description" id="" cols="30" rows="10">
        </textarea>
        <div class="buttons">
          <button type="submit" class="addTodo" name="addTodo">Create</button>
          <button type="submit" class="clearFields" name="clearFields">Clear</button>
        </div>
      </form>
    </section>
    <section class="todos">
      <h2>Actual ToDos</h2>
      <dl class="todolist">
        <?php 
        $number = 1;
        foreach ($my_todos as $value) {
        $id = $value['id'];
         echo "<dt class='conten'><span>{$number} -</span> {$value['name']}<form method='GET'><button type='submit' class='btn apagar' name='deleteTodo' value=$id>X</button></form></dt>
         <dd class='desc'>{$value['description']}</dd>";
         $number += 1; 
        } ?>
      </dl>
    </section>
  </main>
</body>

</html>