<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-28 10:00:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/lostpassword could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-28 10:00:05 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/lostpasswo...')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/lostpasswo...', NULL)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(160): Kohana_View::factory('user/lostpasswo...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_lost_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-28 10:00:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/lostpassword could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-28 10:00:05 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/lostpasswo...')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/lostpasswo...', NULL)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(160): Kohana_View::factory('user/lostpasswo...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_lost_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-28 10:00:43 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 10:00:43 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 10:00:43 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 10:00:43 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 10:22:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: query ~ APPPATH/classes/Controller/Ingredient.php [ 219 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:219
2013-01-28 10:22:27 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(219): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 219, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:219
2013-01-28 10:22:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: query ~ APPPATH/classes/Controller/Ingredient.php [ 219 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:219
2013-01-28 10:22:27 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(219): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 219, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:219
2013-01-28 10:37:22 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/views/recipe/detail.php [ 53 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php:53
2013-01-28 10:37:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php(53): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 53, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php:53
2013-01-28 10:50:54 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Recipe as array ~ APPPATH/views/recipe/detail.php [ 53 ] in :
2013-01-28 10:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 10:50:54 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Recipe as array ~ APPPATH/views/recipe/detail.php [ 53 ] in :
2013-01-28 10:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 11:46:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$calories ~ APPPATH/views/recipe/list.php [ 73 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 11:46:49 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 73, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 11:47:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$calories ~ APPPATH/views/recipe/list.php [ 73 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 11:47:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 73, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 11:50:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$categories ~ APPPATH/views/recipe/list.php [ 72 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:72
2013-01-28 11:50:06 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 72, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:72
2013-01-28 11:53:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ';,proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` ' at line 1 [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, CONCAT(calories,;,proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(442): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ';,proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` ' at line 1 [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, CONCAT(calories,;,proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(442): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'proteinfat' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, CONCAT(calories,";",proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:44 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(442): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'proteinfat' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, CONCAT(calories,";",proteinfat, carbs, sugars) AS `nutritions`, `serving_size`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:53:44 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(442): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-28 11:57:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/recipe/list.php [ 73 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 11:57:59 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(73): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/forrit...', 73, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:73
2013-01-28 12:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$calories ~ APPPATH/classes/Controller/Recipe.php [ 88 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:88
2013-01-28 12:35:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(88): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 88, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:88
2013-01-28 12:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$calories ~ APPPATH/classes/Controller/Recipe.php [ 88 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:88
2013-01-28 12:35:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(88): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 88, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:88
2013-01-28 13:31:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Recipe.php [ 219 ] in :
2013-01-28 13:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 13:31:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Recipe.php [ 219 ] in :
2013-01-28 13:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:08:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/misc/welcome.php [ 27 ] in /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php:27
2013-01-28 14:08:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 27, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php:27
2013-01-28 14:08:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/misc/welcome.php [ 27 ] in /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php:27
2013-01-28 14:08:49 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 27, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(83): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/misc/welcome.php:27
2013-01-28 14:09:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::ingredients_all() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:09:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::ingredients_all() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:09:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::ingredients_all() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:09:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::ingredients_all() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:09:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::find_ingredients() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:09:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::find_ingredients() ~ APPPATH/views/misc/welcome.php [ 27 ] in :
2013-01-28 14:09:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 14:19:04 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:04 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:04 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:04 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:17 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:17 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 24 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24
2013-01-28 14:19:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/forrit...', 24, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:24