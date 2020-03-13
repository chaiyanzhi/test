<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
$output = exec('cd /www/wwwroot/www.luckymessenger.xyz && git pull');
echo $output;

?>