<?php
$example = 'x / 3 = 15';
$desicion = str_replace(' ', '', trim($example));

//Проверяем оператор
echo $example;

switch (true) {
    case strpos($desicion, '+'):
        $operator = '+';
        break;
    case strpos($desicion, '-'):
        $operator = '-';
        break;
    case strpos($desicion, '/'):
        $operator = '/';
        break;
    case strpos($desicion, '*'):
        $operator = '*';
        break;
}

$desicion = str_replace('x', '', $desicion);
$desicion = str_replace($operator, '', $desicion);

$operand = substr($desicion, 0, strpos($desicion, '='));
$desicion = str_replace('=', '', $desicion);
$desicion = str_replace($operand, '', $desicion);

switch ($operator) {
    case '+':
        $x = (int) $desicion - (int) $operand;
        break;
    case '-':
        $x = (int) $desicion + (int) $operand;
        break;
    case '*':
        $x = (int) $desicion / (int) $operand;
        break;
    case '/':
        $x = (int) $desicion * (int) $operand;
        break;
}

echo "</br>" . 'x = ' . (int) $x;
