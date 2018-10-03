#!/usr/bin/php
<?php
					/* doesn't work currently */
    $ret = array();
    unset($argv[0]);
    foreach($argv as $str){
        $pieces = array_filter(explode(" ", $str), 'is_not_null');
        foreach ($pieces as $str2)
			$ret[] = $str2;
		
?>
