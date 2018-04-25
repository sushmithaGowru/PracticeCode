<?php
//Always provide a TRAILING SLASH(/) after a path
define('URL','http://localhost:80/mvc/');
define('LIBS','libs/');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','mvc');
define('DB_USER','root');
define('DB_PASS','');
//The sitewide hashkey,do not change this because it is used for passwords
//This is for other hash keys. not sure yet..
define('HASH_GENERAL_KEY','MixitUp200');
//This is for database passwords only
define('HASH_PASSWORD_KEY','catsFLYhigh2000miles');