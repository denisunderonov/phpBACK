<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $postData = file_get_contents('php://input');
    
    echo $postData;

} else {
    http_response_code(405);
    echo "Метод запроса не поддерживается.";
}

?>
