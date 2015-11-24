<?php
date_default_timezone_set('America/Chicago');
//connect to the database
mysql_connect('69.147.201.128', '5A13X99', '1AlexJay51399') or die("I couldn't connect to your database, please make sure your info is correct!");
mysql_select_db('owncloud') or die("I couldn't find the database table ($table) make sure it's spelt right!");
