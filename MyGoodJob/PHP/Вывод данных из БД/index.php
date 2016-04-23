<?
mysql_connect('localhost','root',''); //Connect
mysql_select_db('userlistdb'); //Тут название БД
$res = mysql_query("SELECT * FROM `usertbl`") or die(mysql_error()); //Запрос к таблице
echo '<table>';
while($row = mysql_fetch_assoc($res)) {
echo '<tr><td>'.$row['full_name'].'</td><td>'.$row['email'].'</td>....</tr>'; // Запрос к полям фулл нэим и емаил в таблице
}
echo '</table>';
?>