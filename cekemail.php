<?php
error_reporting(0);
mysql_connect("localhost");
mysql_select_db("user");

$email = $_GET['w'];

$query = mysql_query("select email from checkid where email='$email'");

if(mysql_num_rows($query)==0){
    echo "$email belum ada yang pakai";
}else{
    echo "$email sudah ada yang pakai";
}
?> 