<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postData = file_get_contents('php://input');

    while (strpos($postData, '(') !== false && strpos($postData, ')') !== false) {
        $leftcharPos = strrpos($postData, '(');
        $rightcharPos = strpos($postData, ')', $leftcharPos);
        $betweenCharsLength = $rightcharPos - $leftcharPos;
        $bulPostData = substr($postData, $leftcharPos + 1, $betweenCharsLength - 1);
        $bulRes = calculate($bulPostData);
        $bulPostDataWithChars = substr($postData, $leftcharPos, $betweenCharsLength + 1);
        $postData = str_replace($bulPostDataWithChars, $bulRes, $postData);
    } 
    
    $result = calculate($postData);
    if ($result !== false) {
        echo $result;
    } else {
        echo 'Ошибка: неверное выражение';
    }
} else {
    http_response_code(405);
    echo "Метод запроса не поддерживается.";
}

function calculate($str) {
    if (strpos($str, '+') !== false) {
        list($firstCount, $secondCount) = explode('+', $str, 2);
        return (int)$firstCount + (int)$secondCount;
    } elseif(strpos($str, '-') !== false) {
        list($firstCount, $secondCount) = explode('-', $str, 2);
        return (int)$firstCount - (int)$secondCount;
    } elseif(strpos($str, '*') !== false) {
        list($firstCount, $secondCount) = explode('*', $str, 2);
        return (int)$firstCount * (int)$secondCount;
    } elseif(strpos($str, '/') !== false) {
        list($firstCount, $secondCount) = explode('/', $str, 2);
        if ((int)$secondCount === 0) {
            return false; // Деление на ноль
        }
        return (int)$firstCount / (int)$secondCount;
    } else {
        return (int)$str;
    }
}


?>
