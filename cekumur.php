<?php
error_reporting(0);
mysql_connect("localhost");
mysql_select_db("user");

$usia = $_GET['r'];

$query = mysql_query("select umur from checkid where umur= '$usia'");

if(is_numeric(umur))
	{
    echo $usia." inputan harus berupa angka!";
	}else
	{
    echo $usia." merupakan angka!";
		}
?> 