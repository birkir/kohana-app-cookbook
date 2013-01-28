<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-14 13:30:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/User.php [ 12 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:12
2013-01-14 13:30:30 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 12, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:12
2013-01-14 13:30:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/User.php [ 12 ] in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:12
2013-01-14 13:30:31 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/forrit...', 12, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php:12
2013-01-14 14:02:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/User.php [ 33 ] in :
2013-01-14 14:02:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:02:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/User.php [ 33 ] in :
2013-01-14 14:02:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:02:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-01-14 14:02:59 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('')
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', '')
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', '')
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', '')
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(46): Model_Auth_User->create_user(Array, Array)
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-01-14 14:03:00 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-01-14 14:03:00 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('')
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', '')
#3 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', '')
#4 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', '')
#5 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(46): Model_Auth_User->create_user(Array, Array)
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-01-14 14:22:52 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/Arr.php [ 277 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Arr.php:277
2013-01-14 14:22:52 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/forrit...', 277, Array)
#1 /var/www/forritun.org/paleo.forritun.org/application/views/user/register.php(16): Kohana_Arr::get('email', Array)
#2 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(37): Kohana_View->__toString()
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#8 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(26): Kohana_View->render()
#9 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Arr.php:277
2013-01-14 14:46:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:46:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:49:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:49:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:49:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:53:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:54:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:54:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:56:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-14 14:56:02 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password_confir...', 'Solid.90')
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password_confir...', 'Solid.90')
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(48): Kohana_ORM->values(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-14 14:56:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-14 14:56:02 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password_confir...', 'Solid.90')
#1 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password_confir...', 'Solid.90')
#2 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/User.php(48): Kohana_ORM->values(Array, Array)
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:699
2013-01-14 14:56:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:56:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:57:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:58:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:58:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 14:59:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 14:59:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:02:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-14 15:02:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:10:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/Controller/User.php [ 24 ] in :
2013-01-14 15:10:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:10:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/Controller/User.php [ 24 ] in :
2013-01-14 15:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:18:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The ingredints property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:24 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('ingredints')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(16): Kohana_ORM->__get('ingredints')
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
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The ingredints property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:26 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('ingredints')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(16): Kohana_ORM->__get('ingredints')
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
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The ingredint property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:33 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('ingredint')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(16): Kohana_ORM->__get('ingredint')
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
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The ingredint property does not exist in the Model_Recipe class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:18:42 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('ingredint')
#1 /var/www/forritun.org/paleo.forritun.org/application/views/recipe/list.php(16): Kohana_ORM->__get('ingredint')
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
#15 {main} in /var/www/forritun.org/paleo.forritun.org/modules/orm/classes/Kohana/ORM.php:600
2013-01-14 15:19:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::has() ~ APPPATH/views/recipe/list.php [ 21 ] in :
2013-01-14 15:19:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:19:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::has() ~ APPPATH/views/recipe/list.php [ 21 ] in :
2013-01-14 15:19:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:21:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/recipe/list.php [ 21 ] in :
2013-01-14 15:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 15:21:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/recipe/list.php [ 21 ] in :
2013-01-14 15:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :