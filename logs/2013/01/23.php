<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-23 09:07:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Recipe.php [ 47 ] in :
2013-01-23 09:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:07:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Controller/Recipe.php [ 47 ] in :
2013-01-23 09:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:44:13 --- EMERGENCY: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/Controller/Recipe.php [ 114 ] in :
2013-01-23 09:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/var/www/forrit...', 114, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(114): json_encode(Array)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-23 09:44:13 --- EMERGENCY: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/Controller/Recipe.php [ 114 ] in :
2013-01-23 09:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/var/www/forrit...', 114, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(114): json_encode(Array)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-23 09:46:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_all() ~ APPPATH/classes/Controller/Recipe.php [ 96 ] in :
2013-01-23 09:46:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:46:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_all() ~ APPPATH/classes/Controller/Recipe.php [ 96 ] in :
2013-01-23 09:46:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:48:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_records() ~ APPPATH/classes/Controller/Recipe.php [ 96 ] in :
2013-01-23 09:48:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:48:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_records() ~ APPPATH/classes/Controller/Recipe.php [ 96 ] in :
2013-01-23 09:48:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:57:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function parseInt() ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in :
2013-01-23 09:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:57:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function parseInt() ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in :
2013-01-23 09:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 09:59:33 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 09:59:33 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 112, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 09:59:33 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 09:59:33 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 112, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 10:00:22 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 10:00:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 112, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 10:00:22 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 112 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 10:00:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 112, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:112
2013-01-23 10:00:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:39 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:39 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:00:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:113
2013-01-23 10:01:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Controller/Recipe.php [ 108 ] in :
2013-01-23 10:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 10:01:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Controller/Recipe.php [ 108 ] in :
2013-01-23 10:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 10:37:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:15 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:17 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:18 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kjötbollur ~ APPPATH/classes/Controller/Recipe.php [ 71 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:37:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 71, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:71
2013-01-23 10:38:27 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` INNER JOIN `recipe_ingredient` ON (`recipe`.`id` = `recipe_ingredient`.`recipe_id`) WHERE `name` LIKE '%kókosolía%' AND `recipe_ingredient`.`ingredient_id` IN (1) AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:38:27 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:38:27 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` INNER JOIN `recipe_ingredient` ON (`recipe`.`id` = `recipe_ingredient`.`recipe_id`) WHERE `name` LIKE '%kókosolía%' AND `recipe_ingredient`.`ingredient_id` IN (1) AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:38:27 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id`, `n...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` WHERE `name` LIKE '%coconutoil%' AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:14 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` WHERE `name` LIKE '%coconutoil%' AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:14 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` WHERE `name` LIKE '%coconutoil%' AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:35 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'field list' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` WHERE `name` LIKE '%coconutoil%' AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:36 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'on clause' [ SELECT `recipes`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` INNER JOIN `recipe_ingredient` ON (`recipe`.`id` = `recipe_ingredient`.`recipe_id`) WHERE `name` LIKE '%kókosolía%' AND `recipe_ingredient`.`ingredient_id` IN (1) AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:58 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipes...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipe.id' in 'on clause' [ SELECT `recipes`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` INNER JOIN `recipe_ingredient` ON (`recipe`.`id` = `recipe_ingredient`.`recipe_id`) WHERE `name` LIKE '%kókosolía%' AND `recipe_ingredient`.`ingredient_id` IN (1) AND `public` = 1 ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:39:58 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipes...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(120): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:40:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Recipe.php [ 45 ] in :
2013-01-23 10:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 10:40:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Recipe.php [ 45 ] in :
2013-01-23 10:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 10:47:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (1) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (1) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:34 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (9) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (9) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (9) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:46 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'recipes.id' in 'on clause' [ SELECT `recipe`.`id`, `name`, `preptime`, `cooktime`, `serves`, `tags`, `user_id` FROM `recipes` AS `recipe` INNER JOIN `recipe_category` ON (`recipes`.`id` = `recipe_category`.`recipe_id`) WHERE `recipe_category`.`category_id` IN (9) AND `public` = 1 GROUP BY `id` ORDER BY `name` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:47:46 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `recipe`...', true, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(126): Kohana_Database_Query->execute(NULL, true)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-23 10:56:14 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: apc ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:14 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance('apc')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:14 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: apc ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:14 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance('apc')
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:28 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance()
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:28 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:56:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance()
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:25
2013-01-23 10:57:28 --- EMERGENCY: Cache_Exception [ 0 ]: PHP APC extension is not available. ~ MODPATH/cache/classes/Kohana/Cache/Apc.php [ 52 ] in /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php:137
2013-01-23 10:57:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php(137): Kohana_Cache_Apc->__construct(Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance('apc')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php:137
2013-01-23 10:57:28 --- EMERGENCY: Cache_Exception [ 0 ]: PHP APC extension is not available. ~ MODPATH/cache/classes/Kohana/Cache/Apc.php [ 52 ] in /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php:137
2013-01-23 10:57:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php(137): Kohana_Cache_Apc->__construct(Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(25): Kohana_Cache::instance('apc')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/cache/classes/Kohana/Cache.php:137
2013-01-23 10:59:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH/cache/classes/Kohana/Cache.php [ 137 ] in :
2013-01-23 10:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 10:59:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH/cache/classes/Kohana/Cache.php [ 137 ] in :
2013-01-23 10:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-23 11:02:25 --- EMERGENCY: ErrorException [ 2 ]: hash_hmac(): Unknown hashing algorithm: ghost ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in :
2013-01-23 11:02:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hash_hmac(): Un...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): hash_hmac('ghost', 'searchterm=&pre...', 'searchquery')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-23 11:02:25 --- EMERGENCY: ErrorException [ 2 ]: hash_hmac(): Unknown hashing algorithm: ghost ~ APPPATH/classes/Controller/Recipe.php [ 113 ] in :
2013-01-23 11:02:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hash_hmac(): Un...', '/var/www/forrit...', 113, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(113): hash_hmac('ghost', 'searchterm=&pre...', 'searchquery')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-01-23 11:16:05 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/recipe/list.php [ 62 ] in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:62
2013-01-23 11:16:05 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(62): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/forrit...', 62, Array)
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
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php:62
2013-01-23 11:19:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: search_identifier ~ APPPATH/classes/Controller/Recipe.php [ 57 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 57, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: search_identifier ~ APPPATH/classes/Controller/Recipe.php [ 57 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:13 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 57, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: search_identifier ~ APPPATH/classes/Controller/Recipe.php [ 57 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:18 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 57, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: search_identifier ~ APPPATH/classes/Controller/Recipe.php [ 57 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:19:18 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 57, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:57
2013-01-23 11:20:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: offset ~ APPPATH/classes/Controller/Recipe.php [ 145 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:145
2013-01-23 11:20:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 145, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(21): Controller_Recipe->search()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:145
2013-01-23 11:20:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: offset ~ APPPATH/classes/Controller/Recipe.php [ 145 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:145
2013-01-23 11:20:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 145, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(21): Controller_Recipe->search()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:145
2013-01-23 11:24:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/Controller/Recipe.php [ 22 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:22
2013-01-23 11:24:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 22, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:22
2013-01-23 11:24:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/Controller/Recipe.php [ 22 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:22
2013-01-23 11:24:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 22, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:22
2013-01-23 12:00:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$foods ~ APPPATH/classes/Controller/Ingredient.php [ 179 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:00:48 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 179, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:05:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 179 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:05:11 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 179, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:05:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 179 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:05:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 179, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:06:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 179 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:06:36 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 179, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:06:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 179 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:06:37 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 179, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:179
2013-01-23 12:07:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:07:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:07:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:07:39 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:39 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:41 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:47 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:49 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:49 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$food ~ APPPATH/classes/Controller/Ingredient.php [ 182 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:09:51 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/forrit...', 182, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Ingredient->action_fs_search()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ingredient))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Ingredient.php:182
2013-01-23 12:24:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The sugar property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-23 12:24:32 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('sugar')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/list.php(26): Kohana_ORM->__get('sugar')
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
2013-01-23 12:26:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The fat property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-23 12:26:25 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('fat')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/ingredient/list.php(28): Kohana_ORM->__get('fat')
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