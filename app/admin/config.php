<?php
// HTTP
define('HTTP_SERVER', 'http://127.0.0.1:8081/admin/');
define('HTTP_CATALOG', 'http://127.0.0.1:8081/');

// HTTPS
define('HTTPS_SERVER', 'http://127.0.0.1:8081/admin/');
define('HTTPS_CATALOG', 'http://127.0.0.1:8081/');

// DIR
define('DIR_APPLICATION', '/var/www/html/admin/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_WEBHOOK', '/var/www/html/webhook/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/html/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'draculartes-dev');
define('DB_PORT', '3306');
define('DB_PREFIX', 'dl_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
