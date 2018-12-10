<?php
date_default_timezone_set('Asia/Shanghai');

function connDB($dbConf)
{
	$conn = mysql_connect($dbConf['host'], $dbConf['user'], $dbConf['pass'], true);

	if ($conn) {
		mysql_query('set names \'utf8\';', $conn);
		return $conn;
	}
	return false;
}

function getDb()
{
	$db1 = array(
		'host' => '118.184.219.119:3306',
		'user' => 'root',
		'pass' => 'lcg!QAZ2wsx',
		'DB_CHARSET'=> 'utf8mb4'
	);
	
	$db = connDB($db1);
	
	mysql_select_db('MiniCom', $db);

	mysql_query('set names \'utf8mb4\'', $db);
	
	return $db;
}

function getTablePrefix(){
	return 'bj_sjs_jybhy';
}

function getAppId(){
	return 'wxe689a0c6f3c13bb7';
}

function getAppSecret(){
	return '84d2efff871b50c6d9906f9d979ac105';
}