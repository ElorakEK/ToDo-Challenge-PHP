<?php 
    function create_todo($todo, $description) {
        global $db;
        $count = 0;
        $query = "INSERT INTO todo 
                        (name,description) 
                    VALUES 
                        (:todo, :description)";
        $statement = $db->prepare($query);
        $statement->bindValue(':todo', $todo);
        $statement->bindValue(':description', $description);
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }

    function get_todos() {
        global $db;
        $query = 'SELECT * FROM todo  
                ORDER BY id ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $results;
    }

    function delete_todo($id) {
        global $db;
        $count = 0;
        $query = 'DELETE FROM todo 
                WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }
