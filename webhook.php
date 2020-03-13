<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
$output = exec($command);
echo $output;

?>