<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
$output = shell_exec($command);
echo $output;

?>