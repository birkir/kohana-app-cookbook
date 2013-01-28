<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-11 03:09:42 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-11 03:09:42 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('1')
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(22): Kohana_ORM::factory('Menu', '1')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-11 03:09:42 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-11 03:09:42 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('1')
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(22): Kohana_ORM::factory('Menu', '1')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-11 03:31:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:21 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('date')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(31): Kohana_ORM->__get('date')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:21 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('date')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(31): Kohana_ORM->__get('date')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('date')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(31): Kohana_ORM->__get('date')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:31:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('date')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(31): Kohana_ORM->__get('date')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-11 03:32:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH/classes/Controller/Menu.php [ 32 ] in :
2013-01-11 03:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 03:32:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH/classes/Controller/Menu.php [ 32 ] in :
2013-01-11 03:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 03:35:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/menu/calendar.php [ 27 ] in :
2013-01-11 03:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 03:35:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/menu/calendar.php [ 27 ] in :
2013-01-11 03:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 09:53:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/recipe/detail.php [ 2 ] in :
2013-01-11 09:53:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 09:53:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/recipe/detail.php [ 2 ] in :
2013-01-11 09:53:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 09:53:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/recipe/detail.php [ 2 ] in :
2013-01-11 09:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 09:53:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/recipe/detail.php [ 2 ] in :
2013-01-11 09:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 12:22:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/Controller/Recipe.php [ 89 ] in :
2013-01-11 12:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 12:22:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/Controller/Recipe.php [ 89 ] in :
2013-01-11 12:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 12:22:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/Controller/Recipe.php [ 89 ] in :
2013-01-11 12:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 12:22:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '(' ~ APPPATH/classes/Controller/Recipe.php [ 89 ] in :
2013-01-11 12:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:10:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serve' in 'field list' [ SELECT `menu_recipe`.`date`, `date`, `menu_recipe`.`serves`, `serve`, `recipe`.`id` AS `id`, `recipe`.`name` AS `name`, `recipe`.`photo` AS `photo`, `recipe`.`description` AS `description`, `recipe`.`preptime` AS `preptime`, `recipe`.`cooktime` AS `cooktime`, `recipe`.`serves` AS `serves`, `recipe`.`source` AS `source`, `recipe`.`tags` AS `tags` FROM `recipes` AS `recipe` JOIN `menu_recipe` ON (`menu_recipe`.`recipe_id` = `recipe`.`id`) WHERE `menu_recipe`.`menu_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-11 15:10:16 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu_re...', 'Model_Recipe', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(32): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-11 15:10:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serve' in 'field list' [ SELECT `menu_recipe`.`date`, `date`, `menu_recipe`.`serves`, `serve`, `recipe`.`id` AS `id`, `recipe`.`name` AS `name`, `recipe`.`photo` AS `photo`, `recipe`.`description` AS `description`, `recipe`.`preptime` AS `preptime`, `recipe`.`cooktime` AS `cooktime`, `recipe`.`serves` AS `serves`, `recipe`.`source` AS `source`, `recipe`.`tags` AS `tags` FROM `recipes` AS `recipe` JOIN `menu_recipe` ON (`menu_recipe`.`recipe_id` = `recipe`.`id`) WHERE `menu_recipe`.`menu_id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-11 15:10:16 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu_re...', 'Model_Recipe', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(32): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_detail()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-11 15:33:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Menu.php [ 77 ] in :
2013-01-11 15:33:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:33:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Menu.php [ 77 ] in :
2013-01-11 15:33:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:34:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Menu.php [ 77 ] in :
2013-01-11 15:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:34:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Menu.php [ 77 ] in :
2013-01-11 15:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:35:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Menu.php [ 73 ] in :
2013-01-11 15:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-11 15:35:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Menu.php [ 73 ] in :
2013-01-11 15:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :