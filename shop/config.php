<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://cesaldir.imagine-studio-solutions.com/shop/');
define('HTTP_CATALOG', 'http://cesaldir.imagine-studio-solutions.com/shop/');
define('HTTP_IMAGE', 'http://cesaldir.imagine-studio-solutions.com/shop/image/');
define('HTTP_ADMIN', 'http://cesaldir.imagine-studio-solutions.com/shop/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_CATALOG', HTTP_CATALOG);
define('HTTPS_IMAGE', HTTP_IMAGE);
define('HTTPS_ADMIN', HTTP_ADMIN);

// DIR
define('DIR_CATALOG', '/home/irvincabezas/public_html/cesaldir.com/shop/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/irvincabezas/public_html/cesaldir.com/shop/system/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/irvincabezas/public_html/cesaldir.com/shop/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'download/');
define('DIR_UPLOAD', DIR_SYSTEM.'upload/');
define('DIR_MODIFICATION', DIR_SYSTEM.'modification/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'cesaldir');
define('DB_PASSWORD', 'cesaldir');
define('DB_DATABASE', 'cesaldir');
define('DB_PREFIX', 'cs_');
define('DB_PORT', '3306');
?>