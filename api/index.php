<?php

header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $responses = array(
        'message' => 'Lajefa Djuda Sianturi'
    );
}else{
    http_response_code(405);
    echo json_encode(array('error' => 'Ga Bisa Masuk'));
}
?>