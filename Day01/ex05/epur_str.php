#!/usr/bin/php
<?php
	if ($argc == 2) 
	{
        $pieces = array_filter(explode(' ', $argv[1]));
        $final = "";
        foreach($pieces as $string)
            $final .= $string . " ";
        echo trim($final) . "\n";
	}
?>
