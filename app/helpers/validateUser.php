<?php

function validateUser($user){
    
    $errors = array();

    if(empty($user['username'])){
        array_push($errors, 'Requiere Usuario');
    }

    if(empty($user['email'])){
        array_push($errors, 'Requiere Correo Electrónico');
    }

    if(empty($user['password'])){
        array_push($errors, 'Necesitas crear una Contraseña');
    }

    if ($user['passwordConf'] !== $user['password']){
        array_push($errors, 'Contraseñas NO COINCIDEN');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)){
        array_push($errors, 'El Email ya existe');
    }

    return $errors;
}




function validateLogin($user){
    
    $errors = array();

    if(empty($user['username'])){
        array_push($errors, 'Requiere Usuario');
    }

    if(empty($user['password'])){
        array_push($errors, 'Necesitas crear una Contraseña');
    }

    return $errors;
}

?>