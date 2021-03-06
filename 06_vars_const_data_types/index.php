<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Глава 6. Переменные, константы, типы данных</title>
</head>
<body>

<?php

/* Жеские ссылки */
$a = 10;
$b =& $a;
$b = 11;
echo $a;
br();

$a = [
  'a' => 'value a',
  'b' => 'value b',
];

$b =& $a['c'];
$b = 'c';


/* Символическая ссылка */
$a = 'var $a';
$b = 'a';
echo $$b;
br();

hr();

$rand = mt_rand(1, 10);
$dynamic_const = "CONST_{$rand}";
define($dynamic_const, $rand);
echo $dynamic_const . " => " . constant($dynamic_const);

echo "<hr>";

class SomeClass
{
  private $x = 100;
}

$a = [
  1,
  [
    "Programs hacking programs. Why?",
    "d'Artaniyan"
  ],
];

echo "<pre>" . var_export($a, true) . "</pre>";
$obj1 = new SomeClass();
echo "<pre>" . var_export($obj1, true) . "</pre>";

function br()
{
  echo "<br>";
}

function hr()
{
  echo "<hr>";
}

?>

</body>
</html>