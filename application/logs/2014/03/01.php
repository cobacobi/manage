<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-01 11:15:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/koes/Workspace/forks/manage/vendor/kohana/core/classes/Kohana/Cookie.php:67
2014-03-01 11:15:51 --- DEBUG: #0 /Users/koes/Workspace/forks/manage/vendor/kohana/core/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/koes/Workspace/forks/manage/vendor/kohana/core/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /Users/koes/Workspace/forks/manage/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/koes/Workspace/forks/manage/vendor/kohana/core/classes/Kohana/Cookie.php:67