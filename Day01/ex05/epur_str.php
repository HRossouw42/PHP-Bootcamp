#!/usr/bin/php
<?php
	if ($argc == 2) 
	{
        $pieces = array_filter(explode(' ', $argv[1]));
        $ret = "";
        foreach($pieces as $v)
            $ret .= $v . " ";
        echo trim($ret) . "\n";
	}
	?>
