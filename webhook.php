<?php

// $pwd = getcwd();
$pwd = 'test';

$command = 'cd ' . $pwd . ' && git pull';
$output = shell_exec($command);
print $output;

?>