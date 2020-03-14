<?php

$pwd = getcwd();

$command = 'cd ' . $pwd . ' && git pull';echo $command;
exec("cd /www/wwwroot/www.luckymessenger.xyz && git pull",$output);
var_dump($output);
echo "<br>";
$a = shell_exec("cd /www/wwwroot/www.luckymessenger.xyz && git pull");
var_dump($a);
echo "<br>";
exec('git pull',$b);
var_dump($b);
echo "<br>";
$c = shell_exec('php -v');
var_dump($c);
$cmd = "eval `ssh-agent -s` && ssh-add && cd $target && git pull 2>&1";
$cmd = "eval `ssh-agent -s` && ssh-add && cd $target && ls 2>&1";
       $res = shell_exec($cmd);
        var_dump($res);
//     $cmd = 'php -v';
//     exec($cmd, $arr);
//     echo '<pre>';
//     var_dump($arr);

?>
