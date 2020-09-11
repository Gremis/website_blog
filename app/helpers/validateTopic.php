<?php

function validateTopic($topic){
    
    $errors = array();

    if(empty($topic['name'])){
        array_push($errors, 'Requiere un nombre');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic){
        if (isset($topic['update-topic']) && $existingTopic['id'] != $post['id']){ 
        array_push($errors, 'Ya existe este nombre');
    }

    if(isset($topic['add-topic'])){
        array_push($errors, 'Ya existe este nombre');
    }
    }


    return $errors;
}

?>