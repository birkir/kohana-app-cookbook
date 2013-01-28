<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-27 16:56:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The serves property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 16:56:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('serves')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php(4): Kohana_ORM->__get('serves')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 17:05:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: serving_type ~ APPPATH/views/recipe/detail.php [ 4 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php:4
2013-01-27 17:05:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 4, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php:4
2013-01-27 17:05:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:39 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:45 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:49 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:05:54 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:06:08 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'serves' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` WHERE `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 30 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:06:08 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(173): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(28): Controller_Recipe->search(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-27 17:54:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: serving_size ~ APPPATH/classes/Controller/Recipe.php [ 293 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:293
2013-01-27 17:54:29 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(293): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 293, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:293
2013-01-27 18:07:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/Controller/Recipe.php [ 371 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:371
2013-01-27 18:07:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(371): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 371, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(289): Controller_Recipe->process_fieldset()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:371
2013-01-27 18:08:07 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/recipe/fieldset.php [ 44 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:44
2013-01-27 18:08:07 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 44, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:44
2013-01-27 18:09:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/Recipe.php [ 95 ] in :
2013-01-27 18:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-27 18:09:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function all_ingredients() on a non-object ~ APPPATH/views/recipe/fieldset.php [ 44 ] in :
2013-01-27 18:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-27 18:10:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The serves property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 18:10:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('serves')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Form.php(9): Kohana_ORM->__get('serves')
#2 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(100): Form::value(Object(Model_Recipe), 'serves')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 18:58:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: unit_id ~ APPPATH/classes/Model/Recipe.php [ 67 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:67
2013-01-27 18:58:33 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 67, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:67
2013-01-27 19:01:50 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 74 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:74
2013-01-27 19:01:50 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(74): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 74, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:74
2013-01-27 19:01:51 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 74 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:74
2013-01-27 19:01:51 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(74): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 74, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:74
2013-01-27 19:09:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mp ~ APPPATH/classes/Model/Recipe.php [ 100 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:09:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 100, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:10:09 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 100 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:10:09 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(100): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 100, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:10:15 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 100 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:10:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(100): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 100, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:100
2013-01-27 19:55:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/classes/Model/Ingredient.php [ 56 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php:56
2013-01-27 19:55:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 56, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(57): Model_Ingredient->weight('8.000', '12')
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(128): Model_Recipe->nutritions()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php:56
2013-01-27 19:58:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Recipe::weight() ~ APPPATH/views/recipe/detail.php [ 32 ] in :
2013-01-27 19:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-27 19:58:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The amount property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 19:58:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('amount')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/detail.php(32): Kohana_ORM->__get('amount')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-27 20:34:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 174 ] in :
2013-01-27 20:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-27 20:34:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 174 ] in :
2013-01-27 20:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-27 20:34:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Recipe.php [ 181 ] in :
2013-01-27 20:34:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :