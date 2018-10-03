<?php
	function ft_split($str)
	{
		$input = array_filter(explode(' ', $str));
		sort($input);
		return $input;
	}
?>