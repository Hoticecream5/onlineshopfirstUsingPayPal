<?php

header('Content-Type: application/json');

$allowed = ['png', 'jpg', 'img', 'jpeg'];
$processed = [];

foreach($_FILES['files']['name'] as $key => $name){
    if($_FILES['files']['error'][$key] === 0){
        $content = fopen($_FILES["resFile"]["tmp_name"], 'r');

        $temp = $_FILES['files']['tmp_name'][$key];

        $ext = explode('.', $name);
            $ext = strtolower(end($ext));

            $file = uniqid('', true) . time() . '.' . $ext;

            if(in_array($ext, $allowed) && move_uploaded_file($temp, 'public/' .$file)){
                $processed[] = array(        
                    'name' => $name,
                    'file' => $file,
                    'uploaded' => true 
                );
        } else{
            $processed[] = array(
                'name' => $name,
                    'uploaded' => false
            );
        }
    }

}
if(!empty($_POST['ajax'])){

  echo json_encode($processed);
}

