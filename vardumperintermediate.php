<?php

require 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

VarDumper::setHandler(function($var)    {
    $cloner = new VarCloner;  // clone something 
    $htmlDumper = new HtmlDumper; // dump in Html format
    $htmlDumper->setStyles([ // change display style 
        'default' => 'background-color:#18171B; color:#FF8400; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num' => 'font-weight:bold; color:#1299DA',
    ]);
    $cliDumper = new CliDumper; //dump in Command Line Interface format

    $dumper = PHP_SAPI === 'cli' ? $cliDumper : $htmlDumper; // work at how to dump it
    $dumper->dump($cloner->cloneVar($var)); // go ahead clone variable and dump it
});

class user
{
    public $username = 'lessandra';

    public $a =['a','b','c','d'];

}

$user = new User;

dump($user);


?>