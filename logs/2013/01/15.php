<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-15 14:03:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The to_grams property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-15 14:03:06 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('to_grams')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(89): Kohana_ORM->__get('to_grams')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-15 14:03:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The to_grams property does not exist in the Model_Ingredient class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-15 14:03:06 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('to_grams')
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(89): Kohana_ORM->__get('to_grams')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-15 14:24:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coconut oil ~ APPPATH/classes/Controller/Menu.php [ 82 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:53 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 82, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coconut oil ~ APPPATH/classes/Controller/Menu.php [ 82 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:53 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 82, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coconut oil ~ APPPATH/classes/Controller/Menu.php [ 82 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:55 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 82, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coconut oil ~ APPPATH/classes/Controller/Menu.php [ 82 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:24:56 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 82, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:82
2013-01-15 14:32:43 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Controller/Menu.php [ 88 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:88
2013-01-15 14:32:43 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(88): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 88, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:88
2013-01-15 14:32:43 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Controller/Menu.php [ 88 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:88
2013-01-15 14:32:43 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php(88): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 88, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Menu->action_grocerylist()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Menu.php:88
2013-01-15 14:36:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coconut oil ~ APPPATH/views/menu/grocerylist.php [ 13 ] in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:36:13 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 13, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(36): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/views/menu/grocerylist.php [ 13 ] in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:28 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 13, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(36): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/views/menu/grocerylist.php [ 13 ] in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:36 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 13, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(36): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/views/menu/grocerylist.php [ 13 ] in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 13, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(36): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/views/menu/grocerylist.php [ 13 ] in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 14:50:41 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 13, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(36): Kohana_View->__toString()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#7 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/forritun.org/paleo.forritun.org/application/views/menu/grocerylist.php:13
2013-01-15 15:25:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 83 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:83
2013-01-15 15:25:20 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(83): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 83, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:83
2013-01-15 15:25:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Recipe.php [ 83 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:83
2013-01-15 15:25:20 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(83): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/forrit...', 83, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:83
2013-01-15 15:31:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/classes/Controller/Recipe.php [ 95 ] in :
2013-01-15 15:31:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-15 15:31:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/classes/Controller/Recipe.php [ 95 ] in :
2013-01-15 15:31:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-15 15:32:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: unit ~ APPPATH/classes/Controller/Recipe.php [ 95 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:95
2013-01-15 15:32:11 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 95, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:95
2013-01-15 15:32:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: unit ~ APPPATH/classes/Controller/Recipe.php [ 95 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:95
2013-01-15 15:32:12 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/forrit...', 95, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:95
2013-01-15 15:32:40 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'group' cannot be null [ INSERT INTO `recipe_ingredient` (`recipe_id`, `ingredient_id`, `unit_id`, `amount`, `group`, `note`) VALUES (7, '11', '1', '', NULL, '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-15 15:32:40 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(103): Kohana_Database_Query->execute()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-15 15:32:40 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'group' cannot be null [ INSERT INTO `recipe_ingredient` (`recipe_id`, `ingredient_id`, `unit_id`, `amount`, `group`, `note`) VALUES (8, '11', '1', '', NULL, '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-15 15:32:40 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(103): Kohana_Database_Query->execute()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/modules/database/classes/Kohana/Database/Query.php:251
2013-01-15 15:33:22 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 76 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:76
2013-01-15 15:33:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(76): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 76, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(27): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:76
2013-01-15 15:33:22 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/Model/Recipe.php [ 76 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:76
2013-01-15 15:33:22 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php(76): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/forrit...', 76, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(27): Model_Recipe->nutritions()
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Model/Recipe.php:76
2013-01-15 15:52:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/Recipe.php [ 86 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:86
2013-01-15 15:52:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 86, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:86
2013-01-15 15:52:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/Recipe.php [ 86 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:86
2013-01-15 15:52:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 86, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Recipe.php:86