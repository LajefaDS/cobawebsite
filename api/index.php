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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lajefa Djuda Sianturi
</body>
</html>