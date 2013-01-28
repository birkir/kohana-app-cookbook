<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-22 08:04:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:04:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:04:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:04:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:24:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:24:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:24:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 08:24:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-22 11:59:23 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.ingredient_groups' doesn't exist [ SHOW FULL COLUMNS FROM `ingredient_groups` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-22 11:59:23 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('ingredient_grou...')
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(50): Kohana_ORM::factory('Ingredient_Grou...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-22 11:59:23 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.ingredient_groups' doesn't exist [ SHOW FULL COLUMNS FROM `ingredient_groups` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-22 11:59:23 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('ingredient_grou...')
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(50): Kohana_ORM::factory('Ingredient_Grou...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/MySQL.php:358
2013-01-22 12:00:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL' ORDER BY `name` ASC' at line 1 [ SELECT `ingredient_group`.`id` AS `id`, `ingredient_group`.`name` AS `name`, `ingredient_group`.`parent_id` AS `parent_id` FROM `ingredient_groups` AS `ingredient_group` WHERE `parent_id` IS 'NULL' ORDER BY `name` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 12:00:00 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ingredi...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(53): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 12:00:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL' ORDER BY `name` ASC' at line 1 [ SELECT `ingredient_group`.`id` AS `id`, `ingredient_group`.`name` AS `name`, `ingredient_group`.`parent_id` AS `parent_id` FROM `ingredient_groups` AS `ingredient_group` WHERE `parent_id` IS 'NULL' ORDER BY `name` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 12:00:00 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ingredi...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(53): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 12:02:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The subgroup property does not exist in the Model_Ingredient_Group class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-22 12:02:36 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('subgroup')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(35): Kohana_ORM->__get('subgroup')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(45): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(29): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-22 13:15:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: groups ~ APPPATH/views/ingredient/fieldset.php [ 33 ] in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:33
2013-01-22 13:15:14 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 33, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(45): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(29): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:33
2013-01-22 13:20:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$foods ~ APPPATH/classes/Controller/Ingredient.php [ 157 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:157
2013-01-22 13:20:56 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(157): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 157, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:157
2013-01-22 13:28:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ingredient_group.ingredient_id' in 'where clause' [ SELECT `ingredient_group`.`id` AS `id`, `ingredient_group`.`name` AS `name`, `ingredient_group`.`sort` AS `sort`, `ingredient_group`.`parent_id` AS `parent_id` FROM `ingredient_groups` AS `ingredient_group` WHERE `ingredient_group`.`ingredient_id` = '11' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 13:28:51 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ingredi...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(650): Kohana_ORM->find()
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('group')
#5 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/list.php(16): Kohana_ORM->__get('group')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(45): Kohana_View->__toString()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#12 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(29): Kohana_View->render()
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#16 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-22 13:47:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/recipe/fieldset.php [ 6 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:6
2013-01-22 13:47:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 6, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(45): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(29): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:6
2013-01-22 14:11:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 23 ] in :
2013-01-22 14:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 14:11:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 23 ] in :
2013-01-22 14:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 14:14:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$foods ~ APPPATH/classes/Controller/Ingredient.php [ 157 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:157
2013-01-22 14:14:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(157): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 157, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:157
2013-01-22 14:38:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method UTF8::lower() ~ APPPATH/classes/Controller/Ingredient.php [ 43 ] in :
2013-01-22 14:38:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 14:38:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method UTF8::lower() ~ APPPATH/classes/Controller/Ingredient.php [ 43 ] in :
2013-01-22 14:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:23:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in :
2013-01-22 15:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:23:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in :
2013-01-22 15:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:23:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in :
2013-01-22 15:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:23:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in :
2013-01-22 15:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:30:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php on line 38 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1846
2013-01-22 15:30:21 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/forrit...', 1846, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(38): Kohana_ORM->where('recipe_category...', Object(Database_Expression))
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1846
2013-01-22 15:30:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php on line 38 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1846
2013-01-22 15:30:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/forrit...', 1846, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(38): Kohana_ORM->where('recipe_category...', Object(Database_Expression))
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1846
2013-01-22 15:30:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:36
2013-01-22 15:30:48 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 36, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:36
2013-01-22 15:30:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:36
2013-01-22 15:30:48 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 36, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:36
2013-01-22 15:39:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function parseFloat() ~ APPPATH/classes/Controller/Recipe.php [ 52 ] in :
2013-01-22 15:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-22 15:39:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function parseFloat() ~ APPPATH/classes/Controller/Recipe.php [ 52 ] in :
2013-01-22 15:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :