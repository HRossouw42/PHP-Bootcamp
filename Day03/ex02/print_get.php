<?php
$input = $_GET;
foreach($input as $key => $value)
	{
		echo ($key);
		echo (": ");
		echo ($value);
		echo ("\n");
	}
?>