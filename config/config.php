<?php

/*
Ganti BASE_PATH sesuai host dan database yg digunakan
Ganti DEFAULT_CONTROLLER sesuai yg dibutuhkan
Ganti detail Database
*/

define('DEVELOPMENT_ENVIRONMENT', true);
define('BASE_PATH', 'http://localhost/mymvc');
define('DEFAULT_CONTROLLER', 'pegawai');

define('DB_DRIVER', 'mysql');
define('DB_NAME', 'pegawai');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');