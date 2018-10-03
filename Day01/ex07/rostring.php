#!/usr/bin/php
<?php
    if ($argc > 1){
        $pieces = array_values(array_filter(explode(' ', $argv[1])));
		$pieces[count($pieces)] = $pieces[0];
		unset($pieces[0]);
        foreach ($pieces as $str)
            $ret .= $str." ";
        echo trim($ret)."\n";
	}
?>
