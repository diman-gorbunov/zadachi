<?
mysql_connect('localhost','root',''); //Connect
mysql_select_db('userlistdb'); //��� �������� ��
$res = mysql_query("SELECT * FROM `usertbl`") or die(mysql_error()); //������ � �������
echo '<table>';
while($row = mysql_fetch_assoc($res)) {
echo '<tr><td>'.$row['full_name'].'</td><td>'.$row['email'].'</td>....</tr>'; // ������ � ����� ���� ���� � ����� � �������
}
echo '</table>';
?>