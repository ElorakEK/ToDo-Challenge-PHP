<?php 
    require('model/database.php'); 
    require('model/todo_db.php');
    $id = filter_input(INPUT_GET, 'deleteTodo', FILTER_VALIDATE_INT);
    $todo = filter_input(INPUT_POST, 'todo', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
    // $my_todos = get_todos();
    if(isset($_GET['deleteTodo'])){
        delete_todo($id);
      }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $todo = $_POST['todo'];
      $description = $_POST['description'];
      if (isset($_POST['addTodo'])) {
        create_todo($todo,$description);
      }
      
    }
    include('view/todo.php');
    


        
   