<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'homestead'); // gunakan root -> xampp
define('DB_PASS', 'secret'); // kosongkan jika tidak ada
define('DB_NAME', 'workshop');

/* Lakukan Koneksi MySQL */
$koneksi = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());

/* Jika Koneksi Berhasil */
if($koneksi){
    mysql_select_db(DB_NAME) or die(mysql_error());
}
