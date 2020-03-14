<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
$output = exec('cd /www/wwwroot/www.luckymessenger.xyz && git pull');
echo $output;
var_dump(get_current_user());
    $cmd = 'php -v';
    exec($cmd, $arr);
    echo '<pre>';
    var_dump($arr);

?>