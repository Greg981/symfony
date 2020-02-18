<?php

require 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

class user
{
    public $username = 'lessandra';

    public $a =['a','b','c','d'];

}

$user = new User;

dump($user);


?>