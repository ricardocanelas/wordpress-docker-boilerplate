<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'wordpress' );
define( 'DB_HOST', 'db' );

ini_set( 'display_errors', 1 );
define( 'WP_DEBUG', true );