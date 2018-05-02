<?php

//libxml_disable_entity_loader(false);
//error_reporting(0);
//    $file = '../helper/dbconfig.xml';
//    $xml_array=simplexml_load_file($file);
//    $jsonStr = json_encode($xml_array);
//    $jsonArray = json_decode($jsonStr,true);
//    $db_host = $jsonArray['host'];
//    $db_username = $jsonArray['user'];
//    $db_password = $jsonArray['password'];
//    $db_name= $jsonArray['database'];
//    $db_port= $jsonArray['port'];

//    global $doc;
//    $doc=new DOMDocument('1.0','utf-8');
//    $doc->load('../helper/dbconfig.xml');
//    $config=$doc->getElementsByTagName("dbconfig");
//    $mysql=$config->item(0);
//    $db_host=$mysql->getElementsByTagName("host")->item(0)->nodeValue;
//    $db_username=$mysql->getElementsByTagName("user")->item(0)->nodeValue;
//    $db_password=$mysql->getElementsByTagName("password")->item(0)->nodeValue;
//    $db_name=$mysql->getElementsByTagName("database")->item(0)->nodeValue;

    $db_host = 'localhost';
    $db_username = 'test';
    $db_password = 'test1';
    $db_name='test';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    mysqli_query($conn, "set names utf8");
if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
libxml_disable_entity_loader(true);
?>