<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

// function Age($age) {
//     if($age >= 21) {
//         echo 'Please come in';
//     } else {
//         echo 'You are not old enough';
//     }
// }

// function connectToDB() {
//     try {
//         return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }

// function fetchAllTasks($pdo) {
    
//     $statement = $pdo->prepare('select * from todos');

//     $statement->execute();

//     return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// }