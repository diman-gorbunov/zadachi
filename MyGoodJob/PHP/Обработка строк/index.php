<meta charset="utf-8">
<?
$count = 13;
$string_1 = "В строке \"Hello, world!\" $count символов.<br>";
echo $string_1;

?>
<?
$en_str = "Hello world!";
$rus_str = "Простая строка";

echo $en_str." - ".strlen($en_str)." символов<br>";
echo $rus_str." - ".strlen($rus_str)." символов";
?>