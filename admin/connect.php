<?php
//establishing connection with database.

mysql_connect('localhost','skylinedb','physics402021') or die('Cannot connect to server');
mysql_select_db('attsystem') or die ('Cannot found database');

?>