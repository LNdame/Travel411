<?php

include("vendor/autoload.php");
use Mailgun\Mailgun;

#//instantiate teh client
$mgClient = new Mailgun('key-aeb2e567d182fb62de638dce6a8dde6a');
$domain ="mg.malawi411.com";


//make the call to the client

$result = $mgClient-> sendMessage($domain, array(
    'from' => 'Andre <ansteph09@gmail.com>',
    'to' => 'ls20045@gmail.com',
    'subject' => 'Malawi411 Dom',
    'text' => 'Testing some of the malawi email awesomeness from 411 domain'
));

?>