<?php


include (ROOT_PATH . "/app/database/db.php");

$table = 'topics';
$id = '';
$name = '';
$description = '';


$topics = selectAll('topics');


if (isset($_POST['add-topic'])){
    unset($_POST['add-topic']);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Tema creado con éxito';
    $_SESSION['type'] = 'Salida';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}


if (isset($_POST['update-topic'])){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Tema actualizado con éxito';
    $_SESSION['type'] = 'Salida';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}

?>