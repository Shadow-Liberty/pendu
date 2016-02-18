<?php

if($_SERVER['REQUEST_METHOD']=== 'GET'){
    include ('controllers/getController.php');

}elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
    include ('controllers/postController.php');
}else{
    $error = '<p>Cette méthode HTTP n’est pas utilisée</p>';
}