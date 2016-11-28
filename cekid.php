<?php
error_reporting(0);
mysql_connect("localhost");
mysql_select_db("user");

$id = $_GET['q'];

$query = mysql_query("select userid from checkid where userid='$id'");

if(empty($_GET['userid'])){
	echo "User ID tidak boleh kosong!";
}
else{
if(mysql_num_rows($query)==0){
    echo "$id belum ada yang pakai";
}
else{
    echo "$id sudah terpakai";
}
}

?> 