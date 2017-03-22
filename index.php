<?php
$host="localhost"; //replace with your hostname 
$username="root"; //replace with your username 
$password=""; //replace with your password 
$db_name="akademik"; //replace with your database 

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "select * from mahasiswa"; 
$result = mysql_query($sql);
$json = array();

if(mysql_num_rows($result)) {
while($row=mysql_fetch_row($result)) {
$json['mahasiswa'][]=$row;
}
}
echo json_encode($json); 

?>