<?php 

require_once '../functions.php';

function verify_link($title, $url) {
    if ((isset($title) and !empty($title)) and (isset($url) and !empty($url))) {
        Header('Location: ../vues/index.php');
        create_link($_POST);
    }
    else {
        echo 'erreur';
    }
}

verify_link($_POST['title'], $_POST['url']);



?>