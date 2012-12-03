<?
$user="root";
$password="";
$database="hello_world";
mysql_connect(localhost, $user, $password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM hello_table";
$result=mysql_query($query);
$num=mysql_numrows($result);

for($i=0, $i<$num, $i++){

}

mysql_close();
?>