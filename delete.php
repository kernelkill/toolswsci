<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 03/10/18
 * Time: 23:32
 */
session_start();
require ('db.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)){

    $result_usuario = "DELETE FROM usuarios WHERE id='$id'";
    $query = mysqli_query($conn, $result_usuario);
    if (mysqli_affected_rows($conn)){
        header('Location: form_cadusu.php?msg=2');
    }else{
        header('Location: form_cadusu.php?msg=3');
    }
}else{
    header('Location: form_cadusu.php?msg=4');
}
