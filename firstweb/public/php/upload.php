<?php
header('Content-Type: application/json')

$allowed = ['png', 'jpg', 'jpeg', 'img'];
$processed = [];


foreach($_FILES['files']['name'] as $key => $name){
    if($_FILES['file']['error'][$key] === 0){

           echo $temp = $_FILES['files']['tmp_name'][$key];

   
}
}