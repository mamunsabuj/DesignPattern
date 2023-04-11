<?php
spl_autoload_register(function($className){
    include('autoload/'.$className.'.php');
});

$type = 'letter'; //email/fax

switch($type){
    case 'email':
        $obj = new SendMail();
        break;
    case 'sms':
        $obj = new SendSms();
        break;
    case 'fax':
        $obj = new SendFax();
        break;
    case 'letter':
        $obj = new SendLetter();
        break;
}
$result = $obj->notification();
print_r($result);




