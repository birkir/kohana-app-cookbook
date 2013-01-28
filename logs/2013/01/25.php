<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-25 11:23:53 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Inflector::plural_icelandic() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Ingredient.php [ 34 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:34
2013-01-25 11:23:53 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/forrit...', 34, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:34
2013-01-25 11:23:53 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Inflector::plural_icelandic() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Ingredient.php [ 34 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:34
2013-01-25 11:23:53 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/forrit...', 34, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:34
2013-01-25 11:24:07 --- EMERGENCY: ErrorException [ 8 ]: Object of class stdClass could not be converted to int ~ APPPATH/classes/Inflector.php [ 16 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php:16
2013-01-25 11:24:07 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php(16): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/forrit...', 16, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(34): Inflector::plural_icelandic('rau??laukur', 4)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php:16
2013-01-25 11:24:08 --- EMERGENCY: ErrorException [ 8 ]: Object of class stdClass could not be converted to int ~ APPPATH/classes/Inflector.php [ 16 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php:16
2013-01-25 11:24:08 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php(16): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/forrit...', 16, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(34): Inflector::plural_icelandic('rau??laukur', 4)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Inflector.php:16
2013-01-25 12:41:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Model/Recipe.php [ 30 ] in :
2013-01-25 12:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 12:41:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Model/Recipe.php [ 30 ] in :
2013-01-25 12:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 12:48:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Template.php [ 19 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 19, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php:19
2013-01-25 12:48:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-25 12:48:44 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(83): Kohana_ORM->__get('user')
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(191): Model_Recipe->nutritions()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-25 12:48:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-25 12:48:44 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(83): Kohana_ORM->__get('user')
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(191): Model_Recipe->nutritions()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-25 13:17:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `name` ASC, `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:17:03 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(36): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:18:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `name` ASC, `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:18:13 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(36): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:23:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `name` ASC, `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:23:42 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(36): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:26:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-25 13:26:50 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 1537, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('category', Object(Model_Category))
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(319): Kohana_ORM->has('category', Object(Model_Category))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-25 13:26:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-25 13:26:50 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 1537, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('category', Object(Model_Category))
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(319): Kohana_ORM->has('category', Object(Model_Category))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-25 13:28:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:32 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(46): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:32 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(46): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(46): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe_ingredient.group' in 'field list' [ SELECT `recipe_ingredient`.`group` AS `group`, `recipe_ingredient`.`amount` AS `amount`, `recipe_ingredient`.`note` AS `note`, `recipe_ingredient`.`unit_id` AS `unit`, `ingredient`.`id` AS `id`, `ingredient`.`group_id` AS `group_id`, `ingredient`.`name` AS `name`, `ingredient`.`name_is` AS `name_is`, `ingredient`.`paleo_scale` AS `paleo_scale`, `ingredient`.`calories` AS `calories`, `ingredient`.`fat_total` AS `fat_total`, `ingredient`.`fat_saturated` AS `fat_saturated`, `ingredient`.`fat_trans` AS `fat_trans`, `ingredient`.`cholestrol` AS `cholestrol`, `ingredient`.`sodium` AS `sodium`, `ingredient`.`carbohydrate` AS `carbohydrate`, `ingredient`.`dietary_fiber` AS `dietary_fiber`, `ingredient`.`sugars` AS `sugars`, `ingredient`.`protein` AS `protein`, `ingredient`.`vitamin_a` AS `vitamin_a`, `ingredient`.`vitamin_c` AS `vitamin_c`, `ingredient`.`calcium` AS `calcium`, `ingredient`.`iron` AS `iron`, `ingredient`.`multiplier` AS `multiplier`, `ingredient`.`piece_100g` AS `piece_100g`, `ingredient`.`unit_id` AS `unit_id` FROM `ingredients` AS `ingredient` ORDER BY `group` ASC, `id` ASC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:28:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe_...', 'Model_Ingredien...', Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Ingredient.php(60): Kohana_ORM->find_all()
#4 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(46): Model_Ingredient->find_all()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_search()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 13:30:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The unit property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-25 13:30:09 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('unit')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(45): Kohana_ORM->__get('unit')
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
2013-01-25 13:41:23 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ APPPATH/classes/Controller/Recipe.php [ 321 ] in :
2013-01-25 13:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/forrit...', 321, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(321): in_array(Array)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-25 13:41:24 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ APPPATH/classes/Controller/Recipe.php [ 321 ] in :
2013-01-25 13:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/forrit...', 321, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(321): in_array(Array)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-25 13:42:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/Controller/Recipe.php [ 323 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:323
2013-01-25 13:42:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(323): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 323, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:323
2013-01-25 13:42:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/Controller/Recipe.php [ 323 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:323
2013-01-25 13:42:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(323): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 323, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:323
2013-01-25 13:44:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_LOGICAL_AND ~ APPPATH/classes/Controller/Recipe.php [ 325 ] in :
2013-01-25 13:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 13:44:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_LOGICAL_AND ~ APPPATH/classes/Controller/Recipe.php [ 325 ] in :
2013-01-25 13:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 13:56:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Recipe.php [ 224 ] in :
2013-01-25 13:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 13:56:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Recipe.php [ 224 ] in :
2013-01-25 13:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 13:56:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/Recipe.php [ 226 ] in :
2013-01-25 13:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 13:56:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/Recipe.php [ 226 ] in :
2013-01-25 13:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 14:16:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `recipes` AS `recipe` WHERE `categories` IS NULL ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:16:54 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1645): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(17): Kohana_ORM->count_all()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:19:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `recipes` AS `recipe` WHERE `categories` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:19:54 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1645): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(24): Kohana_ORM->count_all()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:20:25 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.recipe_categories' doesn't exist [ SELECT (SELECT COUNT(*) FROM `recipe_categories` WHERE `recipe_categories`.`recipe_id` = 'recipes.id') AS `categories`, `recipe`.`id` AS `id`, `recipe`.`name` AS `name`, `recipe`.`photo` AS `photo`, `recipe`.`description` AS `description`, `recipe`.`preptime` AS `preptime`, `recipe`.`cooktime` AS `cooktime`, `recipe`.`serves` AS `serves`, `recipe`.`source` AS `source`, `recipe`.`tags` AS `tags`, `recipe`.`public` AS `public`, `recipe`.`user_id` AS `user_id` FROM `recipes` AS `recipe` WHERE `categories` = 0 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:20:25 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(24): Kohana_ORM->find()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#10 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:00 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.recipe_categories' doesn't exist [ SELECT COUNT(*), (SELECT COUNT(*) FROM `recipe_categories` WHERE `recipe_categories`.`recipe_id` = 'recipes.id') AS `categories`, `recipe`.`id` AS `id`, `recipe`.`name` AS `name`, `recipe`.`photo` AS `photo`, `recipe`.`description` AS `description`, `recipe`.`preptime` AS `preptime`, `recipe`.`cooktime` AS `cooktime`, `recipe`.`serves` AS `serves`, `recipe`.`source` AS `source`, `recipe`.`tags` AS `tags`, `recipe`.`public` AS `public`, `recipe`.`user_id` AS `user_id` FROM `recipes` AS `recipe` WHERE `categories` = 0 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:00 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(25): Kohana_ORM->find()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#10 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:36 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'paleo.recipe_categories' doesn't exist [ SELECT COUNT(*), (SELECT COUNT(*) FROM `recipe_categories` WHERE `recipe_categories`.`recipe_id` = 'recipes.id') AS `categories` FROM `recipes` WHERE `categories` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:36 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(25): Kohana_Database_Query->execute()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:47 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories' in 'where clause' [ SELECT COUNT(*), (SELECT COUNT(*) FROM `recipe_category` WHERE `recipe_category`.`recipe_id` = 'recipes.id') AS `categories` FROM `recipes` WHERE `categories` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:21:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(25): Kohana_Database_Query->execute()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-25 14:24:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/admin/index.php [ 20 ] in /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php:20
2013-01-25 14:24:19 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php(20): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/forrit...', 20, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(46): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(32): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/admin/index.php:20
2013-01-25 14:27:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/admin/index.php [ 28 ] in :
2013-01-25 14:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 14:27:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/admin/index.php [ 28 ] in :
2013-01-25 14:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :