<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-21 08:41:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sig ~ APPPATH/classes/Controller/Ingredient.php [ 63 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:63
2013-01-21 08:41:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 63, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_get()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:63
2013-01-21 08:41:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sig ~ APPPATH/classes/Controller/Ingredient.php [ 63 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:63
2013-01-21 08:41:18 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 63, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_get()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:63
2013-01-21 08:52:25 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/views/template.php [ 37 ] in /var/www/forritun.org/paleo.forritun.org/application/views/template.php:37
2013-01-21 08:52:25 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/forrit...', 37, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/template.php:37
2013-01-21 08:52:26 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/views/template.php [ 37 ] in /var/www/forritun.org/paleo.forritun.org/application/views/template.php:37
2013-01-21 08:52:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/forrit...', 37, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/template.php:37
2013-01-21 12:07:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ingredient ~ APPPATH/classes/Controller/Ingredient.php [ 44 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:44
2013-01-21 12:07:09 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 44, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:44
2013-01-21 12:07:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ingredient ~ APPPATH/classes/Controller/Ingredient.php [ 44 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:44
2013-01-21 12:07:09 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 44, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:44
2013-01-21 13:31:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'uORM' not found ~ APPPATH/classes/Model/Ingredient.php [ 41 ] in :
2013-01-21 13:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 13:31:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'uORM' not found ~ APPPATH/classes/Model/Ingredient.php [ 41 ] in :
2013-01-21 13:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 13:36:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 146 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 13:36:32 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(146): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 146, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 13:36:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 146 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 13:36:33 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(146): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 146, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 13:36:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$foods ~ APPPATH/classes/Controller/Ingredient.php [ 146 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 13:36:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(146): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 146, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:146
2013-01-21 15:10:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 126 ] in :
2013-01-21 15:10:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 15:10:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Recipe.php [ 126 ] in :
2013-01-21 15:10:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 15:10:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:10:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user_id')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_ORM->__get('user_id')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:10:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:10:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user_id')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_ORM->__get('user_id')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:11:16 --- EMERGENCY: Kohana_Exception [ 0 ]: A 'www-authenticate' header must be specified for a HTTP 401 Unauthorized ~ SYSPATH/classes/Kohana/HTTP/Exception/401.php [ 34 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php:77
2013-01-21 15:11:16 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php(77): Kohana_HTTP_Exception_401->check()
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(108): Kohana_HTTP_Exception_Expected->get_response()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php:77
2013-01-21 15:11:17 --- EMERGENCY: Kohana_Exception [ 0 ]: A 'www-authenticate' header must be specified for a HTTP 401 Unauthorized ~ SYSPATH/classes/Kohana/HTTP/Exception/401.php [ 34 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php:77
2013-01-21 15:11:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php(77): Kohana_HTTP_Exception_401->check()
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(108): Kohana_HTTP_Exception_Expected->get_response()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#5 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/HTTP/Exception/Expected.php:77
2013-01-21 15:18:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/recipe/fieldset.php [ 9 ] in :
2013-01-21 15:18:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 15:18:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/views/recipe/fieldset.php [ 9 ] in :
2013-01-21 15:18:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 15:34:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/recipe/fieldset.php [ 11 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:34:02 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 11, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/recipe/fieldset.php [ 11 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:35:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 11, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:35:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/recipe/fieldset.php [ 11 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:35:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 11, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php:11
2013-01-21 15:42:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The preptime property does not exist in the Model_Unit class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:42:43 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('preptime')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Form.php(9): Kohana_ORM->__get('preptime')
#2 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(58): Form::value(Object(Model_Unit), 'preptime')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:43:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The preptime property does not exist in the Model_Unit class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:43:00 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('preptime')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Form.php(9): Kohana_ORM->__get('preptime')
#2 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(58): Form::value(Object(Model_Unit), 'preptime')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-21 15:47:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-21 15:47:03 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 1537, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('category', Object(Model_Category))
#2 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(103): Kohana_ORM->has('category', Object(Model_Category))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-21 15:47:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-21 15:47:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 1537, Array)
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('category', Object(Model_Category))
#2 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/fieldset.php(103): Kohana_ORM->has('category', Object(Model_Category))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(43): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:1537
2013-01-21 19:37:03 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-21 19:37:03 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-21 19:37:03 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 132 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132
2013-01-21 19:37:03 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(132): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 132, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:132