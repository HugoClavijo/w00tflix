<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('hugoclavijo-demo-4343394', 'hugoclavijo', '');
mysql_select_db('c9');

//Webmaster Email
$mail_webmaster = 'example@example.com';

//Top site root URL
$url_root = 'https://w00tflix-hugoclavijo.c9users.io/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = '../../index2.php';

//Design Name
$design = 'default';
?>