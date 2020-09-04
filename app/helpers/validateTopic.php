<?php

function validateTopic($topic){
    
    $errors = array();

    if(empty($topic['name'])){
        array_push($errors, 'Requiere un nombre');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic){
        array_push($errors, 'Este nombre ya existe');
    }

    return $errors;
}

?>