<?php

$pwd = getcwd();
<<<<<<< HEAD
=======
// $pwd = 'test';
>>>>>>> 005d6b46a0f2e531db85320e6d5887887f01aa66

$command = 'cd ' . $pwd . ' && git pull';
$output = shell_exec($command);
print $output;

?>