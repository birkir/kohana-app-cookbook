<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-24 13:29:38 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/Kohana/I18n.php [ 84 ] in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/I18n.php:84
2013-01-24 13:29:38 --- DEBUG: #0 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/I18n.php(84): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/forrit...', 84, Array)
#1 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/I18n.php(161): Kohana_I18n::get(Object(View))
#2 /var/www/forritun.org/paleo.forritun.org/application/views/user/register.php(8): __(Object(View))
#3 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#4 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#5 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/forritun.org/paleo.forritun.org/application/views/template.php(45): Kohana_View->__toString()
#7 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(61): include('/var/www/forrit...')
#8 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/forrit...', Array)
#9 /var/www/forritun.org/paleo.forritun.org/application/classes/Controller/Template.php(29): Kohana_View->render()
#10 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/forritun.org/paleo.forritun.org/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/forritun.org/paleo.forritun.org/system/classes/Kohana/I18n.php:84