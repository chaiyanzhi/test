<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
$output = exec('cd /www/wwwroot/www.luckymessenger.xyz && git pull');
echo $output;
print_r(get_current_user());
    $cmd = 'php -v';
    exec($cmd, $arr);
    echo '<pre>'
    print_r($arr);

?>