#!/usr/bin/php
<?php
    $ret = array();
    unset($argv[0]);
	foreach($argv as $str)
	{
        $pieces = array_filter(explode(' ', $str));
        foreach ($pieces as $str2)
            $ret[] = $str2;
    }
    sort($ret);
    foreach ($ret as $str)
		echo $str."\n";
?>
