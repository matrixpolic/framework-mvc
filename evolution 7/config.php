<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://localhost:8888/');
define('LIBS', 'libs/');

// 
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash... Not sure yet
define('HASH_GENERAL_KEY', 'Z~5}?@2d3~5SyaHTqABbvaP<Wck?cyrYU.fP]{BT');

// This is for database passwords only
define('HASH_PASSWORD_KEY', '3(m#&5=RA~*%qc.TYF*4z6=b43/wV".8=RbnNQrf');