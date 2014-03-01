<?php
/* PHP 5.4 internal webserver .htaccess interpreter */

if (!file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
  $_GET['_url'] = $_SERVER['REQUEST_URI'];
}
return false;
