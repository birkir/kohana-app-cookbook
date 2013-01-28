<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-18 08:26:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/user/profile.php [ 28 ] in :
2013-01-18 08:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 08:26:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/user/profile.php [ 28 ] in :
2013-01-18 08:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 08:26:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/user/profile.php [ 28 ] in :
2013-01-18 08:26:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 08:26:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/user/profile.php [ 28 ] in :
2013-01-18 08:26:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 08:38:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'UTF' not found ~ APPPATH/views/menu/calendar.php [ 4 ] in :
2013-01-18 08:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 08:38:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'UTF' not found ~ APPPATH/views/menu/calendar.php [ 4 ] in :
2013-01-18 08:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 09:26:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The grocery_day property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-18 09:26:00 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('grocery_day', '0')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(11): Kohana_ORM->__set('grocery_day', '0')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-18 09:26:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The grocery_day property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-18 09:26:01 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('grocery_day', '0')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(11): Kohana_ORM->__set('grocery_day', '0')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-18 09:45:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/template.php [ 21 ] in :
2013-01-18 09:45:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 09:45:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/template.php [ 21 ] in :
2013-01-18 09:45:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 09:55:59 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Form::input(), called in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php on line 10 and defined ~ SYSPATH/classes/Kohana/Form.php [ 93 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Form.php:93
2013-01-18 09:55:59 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Form.php(93): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/forrit...', 93, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(10): Kohana_Form::input()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Form.php:93
2013-01-18 10:27:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTP_404_Exception' not found ~ APPPATH/classes/Controller/Ingredient.php [ 16 ] in :
2013-01-18 10:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 10:27:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTP_404_Exception' not found ~ APPPATH/classes/Controller/Ingredient.php [ 16 ] in :
2013-01-18 10:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 10:32:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view ingredient/fieldset could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-18 10:32:50 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(137): Kohana_View->set_filename('ingredient/fiel...')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(30): Kohana_View->__construct('ingredient/fiel...', NULL)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(13): Kohana_View::factory('ingredient/fiel...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-18 10:32:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view ingredient/fieldset could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-18 10:32:51 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(137): Kohana_View->set_filename('ingredient/fiel...')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(30): Kohana_View->__construct('ingredient/fiel...', NULL)
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(13): Kohana_View::factory('ingredient/fiel...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php:137
2013-01-18 10:48:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/ingredient/fieldset.php [ 16 ] in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:16
2013-01-18 10:48:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 16, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:16
2013-01-18 10:48:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/ingredient/fieldset.php [ 16 ] in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:16
2013-01-18 10:48:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 16, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:16
2013-01-18 10:51:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/ingredient/fieldset.php [ 30 ] in :
2013-01-18 10:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 10:51:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/ingredient/fieldset.php [ 30 ] in :
2013-01-18 10:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 10:51:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The unit_d property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-18 10:51:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('unit_d')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(30): Kohana_ORM->__get('unit_d')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-18 10:52:21 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/views/ingredient/fieldset.php [ 30 ] in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:30
2013-01-18 10:52:21 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php(30): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/forrit...', 30, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/fieldset.php:30
2013-01-18 10:58:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The recipes property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-18 10:58:50 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('recipes')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/list.php(14): Kohana_ORM->__get('recipes')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-18 11:02:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/ingredient/fieldset.php [ 1 ] in :
2013-01-18 11:02:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 11:02:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/ingredient/fieldset.php [ 1 ] in :
2013-01-18 11:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 11:02:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/ingredient/fieldset.php [ 1 ] in :
2013-01-18 11:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 11:02:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/ingredient/fieldset.php [ 1 ] in :
2013-01-18 11:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-18 11:02:34 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Ingredient.php [ 39 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:39
2013-01-18 11:02:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(39): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/forrit...', 39, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:39
2013-01-18 11:02:35 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Ingredient.php [ 39 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:39
2013-01-18 11:02:35 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(39): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/forrit...', 39, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:39