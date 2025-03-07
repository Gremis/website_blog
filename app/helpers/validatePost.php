<?php

function validatePost($post){
    
    $errors = array();

    if(empty($post['title'])){
        array_push($errors, 'Requiere un título');
    }

    if(empty($post['body'])){
        array_push($errors, 'El cuerpo requiere contenido');
    }

    if(empty($post['topic_id'])){
        array_push($errors, 'Por favor, selecciona un tema');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost){
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']){ 
        array_push($errors, 'Ya existe una publicación con este título');
    }

    if(isset($post['add-post'])){
        array_push($errors, 'Ya existe una publicación con este título');
    }
    }

    return $errors;
}



?>